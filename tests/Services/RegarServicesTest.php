<?php

declare(strict_types=1);


namespace App\Tests\Services;

use App\Services\RegarService;
use App\Utils\Bonsai\Tipo;
use PHPUnit\Framework\TestCase;

class RegarServicesTest extends TestCase
{
    public function testRegarJulioAgosto()
    {
        $tipo = Tipo::MANZANO;
        // (1) boot the Symfony kernel
        self::bootKernel();

        // (2) use self::$container to access the service container
        $container = self::$container;

        // (3) run some service & test the result
        $regarService = $container->get(RegarService::class);

        self::assertEquals('muy frequente', $regarService->regarBonsai($tipo));
    }
    
    public function testIndex()
    {
        $this->request = $this->getMockBuilder(
            'Symfony\Component\HttpFoundation\Request'
        )->disableOriginalConstructor()
            ->getMock();

        $controller = new Controller1();
        $controller->preExecute($this->request);
        $response = $controller->indexAction();
        $this->assertEquals(
            200,
            $response->getStatusCode()
        );
    }
}