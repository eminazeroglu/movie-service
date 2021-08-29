<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56a94af55a183b567d08fa11227a302a
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Eminazeroglu\\Bot\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Eminazeroglu\\Bot\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit56a94af55a183b567d08fa11227a302a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit56a94af55a183b567d08fa11227a302a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit56a94af55a183b567d08fa11227a302a::$classMap;

        }, null, ClassLoader::class);
    }
}