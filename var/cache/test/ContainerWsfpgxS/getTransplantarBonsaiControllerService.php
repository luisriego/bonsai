<?php

namespace ContainerWsfpgxS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTransplantarBonsaiControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\Bonsai\TransplantarBonsaiController' shared autowired service.
     *
     * @return \App\Controller\Bonsai\TransplantarBonsaiController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Bonsai/TransplantarBonsaiController.php';
        include_once \dirname(__DIR__, 4).'/src/Services/TransplantarService.php';

        return $container->services['App\\Controller\\Bonsai\\TransplantarBonsaiController'] = new \App\Controller\Bonsai\TransplantarBonsaiController(($container->privates['App\\Services\\TransplantarService'] ?? ($container->privates['App\\Services\\TransplantarService'] = new \App\Services\TransplantarService())));
    }
}
