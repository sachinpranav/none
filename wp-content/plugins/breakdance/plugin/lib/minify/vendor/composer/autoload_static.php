<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc768d44d7ab89dae9b06f918bc6d4a2
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
        ),
        'B' => 
        array (
            'Breakdance\\MatthiasMullie\\Minify\\' => 33,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'Breakdance\\MatthiasMullie\\Minify\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc768d44d7ab89dae9b06f918bc6d4a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc768d44d7ab89dae9b06f918bc6d4a2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc768d44d7ab89dae9b06f918bc6d4a2::$classMap;

        }, null, ClassLoader::class);
    }
}
