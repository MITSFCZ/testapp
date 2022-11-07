<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\DefaultController::home'], null, null, null, false, false, null]],
        '/insertVideo' => [[['_route' => 'insertVideo', '_controller' => 'App\\Controller\\DefaultController::insertVideo'], null, null, null, false, false, null]],
        '/info_piece' => [[['_route' => 'info_piece', '_controller' => 'App\\Controller\\DefaultController::infoPiece'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\DefaultController::login'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/([^/]++)(*:20)'
                .'|/video/([^/]++)(*:42)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        20 => [[['_route' => 'api', '_controller' => 'App\\Controller\\DefaultController::api'], ['id'], null, null, false, true, null]],
        42 => [
            [['_route' => 'video', '_controller' => 'App\\Controller\\DefaultController::video'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
