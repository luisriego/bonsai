# bonsai

### Content:
- NGINX 1.19 container to handle HTTP requests
- PHP 8.0.1 container to host your Symfony application
- MySQL 8.0 container to store databases

(feel free to update any version in `Dockerfiles` and ports in `docker-compose.yml`)

### Installation:
- Run `make build` to create all containers 
- Run `make start` to spin up containers
- Enter the PHP container with `make ssh-be`
- Install your favourite Symfony version with `composer create-project symfony/skeleton project [version (e.g. 5.2.*)]`
- Move the content to the root folder with `mv project/* . && mv project/.env .`. This is necessary since Composer won't install the project if the folder already contains data.
- Copy the content from `project/.gitignore` and paste it in the root's folder `.gitignore`
- Remove `project` folder (not needed anymore)
- Navigate to `localhost:1000` so you can see the Symfony welcome page :)

Happy coding!

### Argument Resolver Installation:
- First we install the dependencies above
```
$ composer require monolog doctrine/orm symfony/validator
```
-- (this create a validator.yaml file, we must configure it)
- in config/packages/framework.yaml must be configure:
```
validation:
    enabled: true
```
- in config/packages/validator.yaml we must include:
    email-validation-model: html5  (line existing yet) - at the same hierarchy level
```
framework:
    validation:
        email_validation_mode: html5
        enable_annotations: true      # <<< line to add
```
- Create a forlder in 'src' named 'Html/DTO'
- in this folder create an **Interface** named 'RequestDTO'
```
<?php

declare(strict_types=1);

namespace App\Http\DTO;

use Symfony\Component\HttpFoundation\Request;

interface RequestDTO
{
    public function __construct(Request $request);
}
```
- Now we can do our first DTO, lets start with 'Register'
- in 'DTO' folder we must create 'RegisterRequest' class
```
<?php

declare(strict_types=1);

namespace App\Http\DTO;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

class RegisterRequest implements RequestDTO
{
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=2)
     */
    private ?string $name;

    /**
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private ?string $email;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=6)
     */
    private ?string $password;

    public function __construct(Request $request)
    {
        $this->name = $request->request->get('name');
        $this->email = $request->request->get('email');
        $this->password = $request->request->get('password');
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }
}

```
- Then create the Argument Resolver 'RequestArgumentResolver'
```
<?php

declare(strict_types=1);

namespace App\Http;

use App\Http\DTO\RequestDTO;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class RequestArgumentResolver implements ArgumentValueResolverInterface
{
    private ValidatorInterface $validator;
    private RequestBodyTransformer $requestBodyTransformer;

    public function __construct(ValidatorInterface $validator, RequestBodyTransformer $requestBodyTransformer)
    {
        $this->validator = $validator;
        $this->requestBodyTransformer = $requestBodyTransformer;
    }

    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
        $reflectionClass = new \ReflectionClass($argument->getType());
        if ($reflectionClass->implementsInterface(RequestDTO::class)) {
            return true;
        }

        return false;
    }

    public function resolve(Request $request, ArgumentMetadata $argument): \Generator
    {
        $class = $argument->getType();
        $this->requestBodyTransformer->transform($request);
        $dto = new $class($request);

        $errors = $this->validator->validate($dto);
        if (\count($errors) > 0) {
            throw new BadRequestHttpException((string) $errors);
        }

        yield $dto;
    }
}

```
- in config/services.yaml, if autowiring off we must include this, else nothing to include:
```
# config/services.yaml
services:
    _defaults:
    # ...

    App\ArgumentResolver\UserValueResolver:
        tags:
            - { name: controller.argument_value_resolver, priority: 50 }
```
- Finally to decouple the data:
```
<?php


namespace App\Http;


use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;

class RequestBodyTransformer
{
    public function transform(Request $request)
    {
        switch ($request->headers->get('Content-Type')) {
            case 'application/json':
                $data = \json_decode($request->getContent(), true);
                $request->request = new ParameterBag($data);
                break;
            default:
                break;
        }
    }
}

```


### Error Listener Api/Json transformer
All the exceptions errors in the API must looks like a JSON response
- Create the 'JsonTransformerExceptionListener' class in the 'Listener' folder
```
<?php

declare(strict_types=1);

namespace App\Listener;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class JsonTransformerExceptionListener
{
    public function onKernelException(ExceptionEvent $event): void
    {
        $exception = $event->getThrowable();

        $data = [
            'class' => \get_class($exception),
            'code' => JsonResponse::HTTP_INTERNAL_SERVER_ERROR,
            'message' => $exception->getMessage(),
        ];

        if ($exception instanceof HttpExceptionInterface) {
            $data['code'] = $exception->getStatusCode();
        }

        $event->setResponse($this->prepareResponse($data));
    }

    private function prepareResponse(array $data): JsonResponse
    {
        return new JsonResponse($data, $data['code']);
    }
}
```
- Include the lines above in services.yaml 
```
# config/services.yaml
#...

App\Listener\JsonTransformerExceptionListener:
    tags:
        - { name: kernel.event_listener, event: kernel.exception, method: onKernelException, priority: 100 }
```

#### In the end, this may be what the composer.json looks like
```
# composer.json  -  possible aspect!
#...
"require": {
    "php": ">=8.0",
    "ext-ctype": "*",
    "ext-iconv": "*",
    "composer/package-versions-deprecated": "1.11.99.1",
    "doctrine/doctrine-bundle": "^2.2",
    "doctrine/doctrine-migrations-bundle": "^3.0",
    "doctrine/orm": "^2.8",
    "lexik/jwt-authentication-bundle": "^2.11",
    "symfony/console": "5.2.*",
    "symfony/dotenv": "5.2.*",
    "symfony/flex": "^1.3.1",
    "symfony/framework-bundle": "5.2.*",
    "symfony/monolog-bundle": "^3.6",
    "symfony/proxy-manager-bridge": "5.2.*",
    "symfony/uid": "5.2.*",
    "symfony/validator": "5.2.*",
    "symfony/yaml": "5.2.*"
}
```
