<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50fa591271152ac62aea13deb42d07d9
{
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit50fa591271152ac62aea13deb42d07d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit50fa591271152ac62aea13deb42d07d9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit50fa591271152ac62aea13deb42d07d9::$classMap;

        }, null, ClassLoader::class);
    }
}
