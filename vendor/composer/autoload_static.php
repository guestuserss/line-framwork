<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit882977c7c78b9190c22a6f9df5a8633c
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit882977c7c78b9190c22a6f9df5a8633c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit882977c7c78b9190c22a6f9df5a8633c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit882977c7c78b9190c22a6f9df5a8633c::$classMap;

        }, null, ClassLoader::class);
    }
}
