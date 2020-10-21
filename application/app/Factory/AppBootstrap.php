<?php


namespace App\Factory;

defined('ABSPATH') || die('Cheatin?');

/**
 * Class AppBootstrap
 *
 * @package App\Factory
 *
 */
abstract class AppBootstrap
{
    protected static $instance = null;

    public function __construct(){
        $this->init();
    }

    abstract protected function init(): void;


    public static function getInstance()
    {
        if(is_null(static::$instance)){
            static::$instance = new static();
        }

        return static::$instance;
    }

}