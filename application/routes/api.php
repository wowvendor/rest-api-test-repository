<?php
defined('ABSPATH') || die('Cheatin?');

$router = get_router();

$router->addRoute(
    'get',
    '1',
    'wowvendor',
    'say-hello',
    'DummyEndpoint'
);

$router->addRoute(
    'get',
    '2',
    'wowvendor',
    'say-hi',
    'SecondDummyEndpoint'
);