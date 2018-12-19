<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbfedfa939a2d3f6660771dc7a0af4ed7
{
    public static $classMap = array (
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Database\\Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'App\\Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitbfedfa939a2d3f6660771dc7a0af4ed7::$classMap;

        }, null, ClassLoader::class);
    }
}
