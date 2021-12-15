<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa2800f7616f59772d5f0993eb3f93a5
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Surazdott\\LaravelHelper\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Surazdott\\LaravelHelper\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa2800f7616f59772d5f0993eb3f93a5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa2800f7616f59772d5f0993eb3f93a5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa2800f7616f59772d5f0993eb3f93a5::$classMap;

        }, null, ClassLoader::class);
    }
}
