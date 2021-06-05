<?php


namespace App\Tests\Functional\Controller\Bonsai;


use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class AbonarControllerTest extends WebTestCase
{
    private const ENDPOINT = '/api/v1/bonsai/abonar';
    private static ?KernelBrowser $client = null;

    public function setUp(): void
    {
        parent::setUp();

        if (null === self::$client) {
            self::$client = static::createClient();
            self::$client->setServerParameter('CONTENT_TYPE', 'application/json');
        }
    }

    public function testAbonar(): void
    {
        self::$client->request(Request::METHOD_POST, self::ENDPOINT, [], [], [], \json_encode([]));

        $response = self::$client->getResponse();

        self::assertEquals(JsonResponse::HTTP_OK, $response->getStatusCode());
    }
}