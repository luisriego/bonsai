<?php


namespace App\Controller\Bonsai;


use App\Services\RegarService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class RegarBonsaiController
{
    private RegarService $regarService;

    public function __construct(RegarService $regarService)
    {
        $this->regarService = $regarService;
    }

    public function __invoke(Request $request): JsonResponse
    {
        $data = \json_decode($request->getContent(), true);

        if (!\array_key_exists('type', $data)) {
            throw new BadRequestHttpException('El tipo de bonsai es obligatorio');
        }

        $frecuencia = $this->regarService->regarBonsai($data['type']);

        if (null === $frecuencia) {
            return new JsonResponse(null, JsonResponse::HTTP_BAD_REQUEST);
        }

        return new JsonResponse($frecuencia, JsonResponse::HTTP_OK);
    }
}
