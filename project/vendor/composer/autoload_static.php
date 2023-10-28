<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad7b8a77b606c00c08ce279067715d39
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/Src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitad7b8a77b606c00c08ce279067715d39::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad7b8a77b606c00c08ce279067715d39::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitad7b8a77b606c00c08ce279067715d39::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInitad7b8a77b606c00c08ce279067715d39::$classMap;

        }, null, ClassLoader::class);
    }
}
