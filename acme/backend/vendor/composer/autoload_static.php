<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc74e2925da5b7b7ea1f0f8b5063d6fa2
{
    public static $files = array (
        '337663d83d8353cc8c7847676b3b0937' => __DIR__ . '/..' . '/kahlan/kahlan/src/functions.php',
        '9b38cf48e83f5d8f60375221cd213eee' => __DIR__ . '/..' . '/phpstan/phpstan/bootstrap.php',
        '46be4dacb8f7d49652a44d0dcf87a45c' => __DIR__ . '/..' . '/phputil/cors/src/cors.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phputil\\router\\' => 15,
            'phputil\\cors\\' => 13,
        ),
        'K' => 
        array (
            'Kahlan\\' => 7,
        ),
        'A' => 
        array (
            'Acme\\Backend\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phputil\\router\\' => 
        array (
            0 => __DIR__ . '/..' . '/phputil/router/src',
        ),
        'phputil\\cors\\' => 
        array (
            0 => __DIR__ . '/..' . '/phputil/cors/src',
        ),
        'Kahlan\\' => 
        array (
            0 => __DIR__ . '/..' . '/kahlan/kahlan/src',
        ),
        'Acme\\Backend\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc74e2925da5b7b7ea1f0f8b5063d6fa2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc74e2925da5b7b7ea1f0f8b5063d6fa2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc74e2925da5b7b7ea1f0f8b5063d6fa2::$classMap;

        }, null, ClassLoader::class);
    }
}
