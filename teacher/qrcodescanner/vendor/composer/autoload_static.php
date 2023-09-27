<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc90a02a393506067dee59f3b600a7215
{
    public static $files = array (
        '74f78b6b99713ff89d56028b614df71a' => __DIR__ . '/..' . '/libern/qr-code-reader/src/lib/common/customFunctions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zxing\\' => 6,
        ),
        'L' => 
        array (
            'Libern\\QRCodeReader\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zxing\\' => 
        array (
            0 => __DIR__ . '/..' . '/libern/qr-code-reader/src/lib',
        ),
        'Libern\\QRCodeReader\\' => 
        array (
            0 => __DIR__ . '/..' . '/libern/qr-code-reader/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc90a02a393506067dee59f3b600a7215::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc90a02a393506067dee59f3b600a7215::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc90a02a393506067dee59f3b600a7215::$classMap;

        }, null, ClassLoader::class);
    }
}