<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit267ff035db468c72dd69dd60d21f1306
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lamp\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lamp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit267ff035db468c72dd69dd60d21f1306::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit267ff035db468c72dd69dd60d21f1306::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit267ff035db468c72dd69dd60d21f1306::$classMap;

        }, null, ClassLoader::class);
    }
}