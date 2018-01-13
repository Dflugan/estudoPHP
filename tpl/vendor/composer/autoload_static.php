<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b1beec56cb0660cd662d9b57b84e60d
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

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b1beec56cb0660cd662d9b57b84e60d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b1beec56cb0660cd662d9b57b84e60d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6b1beec56cb0660cd662d9b57b84e60d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
