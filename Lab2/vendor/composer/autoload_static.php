<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc1f0ffa2d9bdf58a22556f6828f0d864
{
    public static $files = array (
        '596a21e101703c0a7dca51b2e95d32ef' => __DIR__ . '/../..' . '/config.php',
        '3ce76a71f0c679ce057bea9d830f04a3' => __DIR__ . '/../..' . '/functions.php',
        'e5e690af3611818d9094b6f8cfbf82a4' => __DIR__ . '/../..' . '/show.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mostafaroshdy1\\Lab1\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mostafaroshdy1\\Lab1\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc1f0ffa2d9bdf58a22556f6828f0d864::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc1f0ffa2d9bdf58a22556f6828f0d864::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc1f0ffa2d9bdf58a22556f6828f0d864::$classMap;

        }, null, ClassLoader::class);
    }
}