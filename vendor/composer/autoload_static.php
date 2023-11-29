<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf85366b9e83dad257e2b94c1a41330a8
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NIP24\\' => 6,
        ),
        'G' => 
        array (
            'GusApi\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NIP24\\' => 
        array (
            0 => __DIR__ . '/..' . '/nip24/client/NIP24',
        ),
        'GusApi\\' => 
        array (
            0 => __DIR__ . '/..' . '/gusapi/gusapi/src/GusApi',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf85366b9e83dad257e2b94c1a41330a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf85366b9e83dad257e2b94c1a41330a8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf85366b9e83dad257e2b94c1a41330a8::$classMap;

        }, null, ClassLoader::class);
    }
}
