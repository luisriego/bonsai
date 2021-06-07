<?php

namespace ContainerWsfpgxS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIdentityTranslatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'identity_translator' shared service.
     *
     * @return \Symfony\Component\Translation\IdentityTranslator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/IdentityTranslator.php';

        return $container->privates['identity_translator'] = new \Symfony\Component\Translation\IdentityTranslator();
    }
}
