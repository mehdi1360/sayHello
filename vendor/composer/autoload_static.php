<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6cbe9f113d958a8f2370889a08a267c4
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'Hello' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit6cbe9f113d958a8f2370889a08a267c4::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
