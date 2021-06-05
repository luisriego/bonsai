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
        '/api/v1/bonsai/abonar' => [[['_route' => 'api_bonsai_abonar', '_controller' => 'App\\Controller\\Bonsai\\AbonarBonsaiController'], null, ['POST' => 0], null, false, false, null]],
        '/api/v1/bonsai/transplantar' => [[['_route' => 'api_bonsai_transplantar', '_controller' => 'App\\Controller\\Bonsai\\TransplantarBonsaiController'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
