<?php

namespace ContainerR32S4wb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DxXZuyjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DxXZuyj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DxXZuyj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'deliveryDrink' => ['privates', '.errored..service_locator.DxXZuyj.App\\Entity\\DeliveryDrink', NULL, 'Cannot autowire service ".service_locator.DxXZuyj": it references class "App\\Entity\\DeliveryDrink" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'deliveryDrink' => 'App\\Entity\\DeliveryDrink',
            'entityManager' => '?',
        ]);
    }
}
