<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8a770e2b1fb7453b6313bbff5e3065e5
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8a770e2b1fb7453b6313bbff5e3065e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8a770e2b1fb7453b6313bbff5e3065e5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
