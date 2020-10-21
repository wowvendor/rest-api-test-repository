<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita6faffb60575c1ae860da48b38eaa749
{
    public static $files = array (
        '45281b3f5f5da44630783b8e9659fc9c' => __DIR__ . '/../..' . '/helpers/helpers.php',
        '8f3f66fca732e89eb81aeab234a7a25e' => __DIR__ . '/../..' . '/helpers/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita6faffb60575c1ae860da48b38eaa749::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita6faffb60575c1ae860da48b38eaa749::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}