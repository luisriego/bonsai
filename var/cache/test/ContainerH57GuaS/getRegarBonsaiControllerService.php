<?php

namespace ContainerH57GuaS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegarBonsaiControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\Bonsai\RegarBonsaiController' shared autowired service.
     *
     * @return \App\Controller\Bonsai\RegarBonsaiController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Bonsai/RegarBonsaiController.php';
        include_once \dirname(__DIR__, 4).'/src/Services/RegarService.php';

        return $container->services['App\\Controller\\Bonsai\\RegarBonsaiController'] = new \App\Controller\Bonsai\RegarBonsaiController(($container->privates['App\\Services\\RegarService'] ?? ($container->privates['App\\Services\\RegarService'] = new \App\Services\RegarService())));
    }
}
