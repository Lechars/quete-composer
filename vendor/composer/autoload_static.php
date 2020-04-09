<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit71065423057b374974cd743be380a40c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit71065423057b374974cd743be380a40c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit71065423057b374974cd743be380a40c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
