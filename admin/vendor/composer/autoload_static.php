<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfeed2d807766a26821cc6eb186b801c9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfeed2d807766a26821cc6eb186b801c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfeed2d807766a26821cc6eb186b801c9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfeed2d807766a26821cc6eb186b801c9::$classMap;

        }, null, ClassLoader::class);
    }
}
