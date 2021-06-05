<?php


namespace App\Tests\Functional\Controller\Bonsai;


use App\Utils\Bonsai\Type;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class RegarControllerTest extends WebTestCase
{
    private const ENDPOINT = '/api/v1/bonsai/regar';
    private static ?KernelBrowser $client = null;

    public function setUp(): void
    {
        parent::setUp();

        if (null === self::$client) {
            self::$client = static::createClient();
            self::$client->setServerParameter('CONTENT_TYPE', 'application/json');
        }
    }

    public function testTipoEsObligatorio(): void
    {
        self::$client->request(Request::METHOD_POST, self::ENDPOINT, [], [], [], \json_encode([]));

        $response = self::$client->getResponse();

        self::assertEquals(JsonResponse::HTTP_BAD_REQUEST, $response->getStatusCode());
    }

    public function testRegarJulioAgosto(): void
    {
        $payload = [
            'type' => Type::OLIVO,
        ];

        self::$client->request(Request::METHOD_POST, self::ENDPOINT, [], [], [], \json_encode($payload));

        $response = self::$client->getResponse();

        self::assertEquals(JsonResponse::HTTP_OK, $response->getStatusCode());
    }
}
