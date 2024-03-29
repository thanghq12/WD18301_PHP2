<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteeca0bdffd8769ea5636f22d93f2c6a6
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
            $loader->prefixLengthsPsr4 = ComposerStaticIniteeca0bdffd8769ea5636f22d93f2c6a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteeca0bdffd8769ea5636f22d93f2c6a6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteeca0bdffd8769ea5636f22d93f2c6a6::$classMap;

        }, null, ClassLoader::class);
    }
}
