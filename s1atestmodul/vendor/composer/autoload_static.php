<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c3f122b4f0e2adabb447b166e5c1a73
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'own\\owntestmodul\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'own\\owntestmodul\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../../../source/modules/own/owntestmodul',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4c3f122b4f0e2adabb447b166e5c1a73::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4c3f122b4f0e2adabb447b166e5c1a73::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4c3f122b4f0e2adabb447b166e5c1a73::$classMap;

        }, null, ClassLoader::class);
    }
}
