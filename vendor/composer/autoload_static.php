<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit435ceae810df0026ad0ce3ccfd57cb0a
{
    public static $files = array (
        '841780ea2e1d6545ea3a253239d59c05' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Q' => 
        array (
            'Qiniu\\' => 6,
        ),
        'E' => 
        array (
            'Emarref\\Jwt\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Qiniu\\' => 
        array (
            0 => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu',
        ),
        'Emarref\\Jwt\\' => 
        array (
            0 => __DIR__ . '/..' . '/emarref/jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit435ceae810df0026ad0ce3ccfd57cb0a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit435ceae810df0026ad0ce3ccfd57cb0a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}