<?php

namespace Container3XbKyYd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNumberConfiguratorService extends App_KernelAmperDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\NumberConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\NumberConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Field/FieldConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/NumberConfigurator.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Intl/IntlFormatter.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\NumberConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\NumberConfigurator(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter'] ?? ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter'] = new \EasyCorp\Bundle\EasyAdminBundle\Intl\IntlFormatter())));
    }
}
