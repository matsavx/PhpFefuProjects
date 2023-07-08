<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main_page', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/pizzas' => [[['_route' => 'pizzaList', '_controller' => 'App\\Controller\\ProductController::pizzaList'], null, null, null, false, false, null]],
        '/drinks' => [[['_route' => 'drinkList', '_controller' => 'App\\Controller\\ProductController::drinkList'], null, null, null, false, false, null]],
        '/rolls' => [[['_route' => 'rollList', '_controller' => 'App\\Controller\\ProductController::rollList'], null, null, null, false, false, null]],
        '/kits' => [[['_route' => 'kitList', '_controller' => 'App\\Controller\\ProductController::kitList'], null, null, null, false, false, null]],
        '/order' => [[['_route' => 'order', '_controller' => 'App\\Controller\\ProductController::createOrder'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/pizzas/addingPizza/(\\d+)(*:193)'
                .'|/kits/remove(?'
                    .'|Pizza/(\\d+)(*:227)'
                    .'|Drink/(\\d+)(*:246)'
                    .'|Roll/(\\d+)(*:264)'
                .')'
                .'|/drinks/addingDrink/(\\d+)(*:298)'
                .'|/rolls/addingRolls/(\\d+)(*:330)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        193 => [[['_route' => 'pizzaAdd', '_controller' => 'App\\Controller\\ProductController::kitAddPizza'], ['id'], null, null, false, true, null]],
        227 => [[['_route' => 'removePizza', '_controller' => 'App\\Controller\\ProductController::kitRemovePizza'], ['id'], null, null, false, true, null]],
        246 => [[['_route' => 'removeDrink', '_controller' => 'App\\Controller\\ProductController::kitRemoveDrink'], ['id'], null, null, false, true, null]],
        264 => [[['_route' => 'removeRoll', '_controller' => 'App\\Controller\\ProductController::kitRemoveRoll'], ['id'], null, null, false, true, null]],
        298 => [[['_route' => 'drinkAdd', '_controller' => 'App\\Controller\\ProductController::kitAddDrink'], ['id'], null, null, false, true, null]],
        330 => [
            [['_route' => 'rollAdd', '_controller' => 'App\\Controller\\ProductController::kitAddRoll'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
