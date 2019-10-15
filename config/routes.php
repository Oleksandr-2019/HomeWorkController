<?php
use App\Controller\MyContaktsController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;


return function (RoutingConfigurator $routes) {
    $routes->add('api_post_show', '/api/posts/{id}')
        ->controller([MyContaktsController::class, 'show'])
        ->methods(['GET', 'HEAD'])
    ;
    $routes->add('api_post_edit', '/api/posts/{id}')
        ->controller([MyContaktsController::class, 'edit'])
        ->methods(['PUT'])
    ;
};