<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd66ada9b34e599627d51c061ea4cc52
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Minicli\\' => 8,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Minicli\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd66ada9b34e599627d51c061ea4cc52::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd66ada9b34e599627d51c061ea4cc52::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdd66ada9b34e599627d51c061ea4cc52::$classMap;

        }, null, ClassLoader::class);
    }
}