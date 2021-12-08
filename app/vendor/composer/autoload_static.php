<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf9ef73a7f109ab7ba31d091cfd446a7
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf9ef73a7f109ab7ba31d091cfd446a7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf9ef73a7f109ab7ba31d091cfd446a7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcf9ef73a7f109ab7ba31d091cfd446a7::$classMap;

        }, null, ClassLoader::class);
    }
}