<?php


namespace App\Tests\Functional\Controller\Bonsai;


use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class TransplantarControllerTest extends WebTestCase
{
    private const ENDPOINT = '/api/v1/bonsai/transplantar';
    private static ?KernelBrowser $client = null;

    public function setUp(): void
    {
        parent::setUp();

        if (null === self::$client) {
            self::$client = static::createClient();
            self::$client->setServerParameter('CONTENT_TYPE', 'application/json');
        }
    }

    public function testTransplantarEnMarzo(): void
    {
        self::$client->request(Request::METHOD_POST, self::ENDPOINT, [], [], [], \json_encode([]));

        $response = self::$client->getResponse();

        self::assertEquals(JsonResponse::HTTP_OK, $response->getStatusCode());
    }

    public function testTransplantar(): void
    {
        self::$client->request(Request::METHOD_POST, self::ENDPOINT, [], [], [], \json_encode([]));

        $response = self::$client->getResponse();

        self::assertEquals(JsonResponse::HTTP_OK, $response->getStatusCode());
    }
}
