<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8dbf77ec22da6e0e6d0c173f2737c28b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
            'Spatie\\DbDumper\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Spatie\\DbDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/db-dumper/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8dbf77ec22da6e0e6d0c173f2737c28b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8dbf77ec22da6e0e6d0c173f2737c28b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8dbf77ec22da6e0e6d0c173f2737c28b::$classMap;

        }, null, ClassLoader::class);
    }
}