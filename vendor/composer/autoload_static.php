<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9de1eebc380ab7235c5f60082c87d3fc
{
    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'Jacwright\\RestServer' => 
            array (
                0 => __DIR__ . '/../..' . '/source',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit9de1eebc380ab7235c5f60082c87d3fc::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
