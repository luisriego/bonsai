<?php


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class HealthControllerTest extends WebTestCase
{
    private const ENDPOINT = '/api/v1/health-check';

    public function testSomething(): void
    {
        // This calls KernelTestCase::bootKernel(), and creates a
        // "client" that is acting as the browser
        $client = static::createClient();
        $client->request(Request::METHOD_GET, self::ENDPOINT);

        $response = $client->getResponse();

        self::assertEquals(JsonResponse::HTTP_OK, $response->getStatusCode());
    }
}
