<?php

namespace Container3CuwoGS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHealthCheckControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\HealthCheckController' shared autowired service.
     *
     * @return \App\Controller\HealthCheckController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/HealthCheckController.php';

        return $container->services['App\\Controller\\HealthCheckController'] = new \App\Controller\HealthCheckController();
    }
}
