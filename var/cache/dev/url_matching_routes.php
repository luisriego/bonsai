<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/v1/health-check' => [[['_route' => 'api_health_check', '_controller' => 'App\\Controller\\HealthCheckController'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/bonsai/regar' => [[['_route' => 'api_bonsai_regar', '_controller' => 'App\\Controller\\Bonsai\\RegarBonsaiController'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
