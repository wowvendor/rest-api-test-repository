<?php

namespace App;

defined('ABSPATH') || die('Cheatin?');

class App extends Factory\AppBootstrap
{
    protected static $instance = null;

    protected function init(): void
    {
       if(is_rest_api_call()){
           require_once ABSPATH . '/routes/api.php';
           $rest = Rest\RestController::getInstance();
           $rest->setResponse();
       } else {
           require_once ABSPATH . '/routes/web.php';
       }
    }
}