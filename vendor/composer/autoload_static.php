<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9b7ca1d20d8f0ac469bd528a01b18c24
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/lib',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit9b7ca1d20d8f0ac469bd528a01b18c24::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
