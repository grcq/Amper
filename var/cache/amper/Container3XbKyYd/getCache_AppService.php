<?php

namespace Container3XbKyYd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_AppService extends App_KernelAmperDebugContainer
{
    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';

        $container->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('Rpq08Oir2g', 0, ($container->targetDir.''.'/pools/app'), ($container->privates['cache.default_marshaller'] ?? ($container->privates['cache.default_marshaller'] = new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL, true))));

        $instance->setLogger(($container->privates['monolog.logger.cache'] ?? $container->getMonolog_Logger_CacheService()));

        return $instance;
    }
}
