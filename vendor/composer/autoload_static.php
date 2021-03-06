<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4707cc7860e550a98e25d68f8d2b3890
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Conversation\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Conversation\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4707cc7860e550a98e25d68f8d2b3890::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4707cc7860e550a98e25d68f8d2b3890::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
