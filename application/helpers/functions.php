<?php

use App\{App, Rest\RestController};

defined('ABSPATH') || die('Cheatin?');

function get_app(): App
{
    return App::getInstance();
}

function get_router(): RestController
{
    return RestController::getInstance();
}