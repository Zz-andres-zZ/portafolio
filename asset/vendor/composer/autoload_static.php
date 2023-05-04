<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc877445446f12b534bbf2ccf75707c55
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc877445446f12b534bbf2ccf75707c55::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc877445446f12b534bbf2ccf75707c55::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc877445446f12b534bbf2ccf75707c55::$classMap;

        }, null, ClassLoader::class);
    }
}
