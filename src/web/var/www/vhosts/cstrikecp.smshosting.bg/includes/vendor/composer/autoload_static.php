<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42495b7e7ac6c216c9a302e301c2125a
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'U' => 
        array (
            'User890104\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'User890104\\' => 
        array (
            0 => __DIR__ . '/..' . '/user890104/rcon-client/src/User890104',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42495b7e7ac6c216c9a302e301c2125a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42495b7e7ac6c216c9a302e301c2125a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
