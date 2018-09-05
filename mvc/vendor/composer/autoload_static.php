<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42df5ee8b879361858cae19e276540db
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/vendor',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/vendor',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/vendor',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Database\\' => 20,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/vendor',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/vendor',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/vendor',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/vendor',
        ),
        'Illuminate\\Database\\' => 
        array (
            0 => __DIR__ . '/vendor',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/vendor',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/vendor',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/vendor',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/vendor',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/vendor',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42df5ee8b879361858cae19e276540db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42df5ee8b879361858cae19e276540db::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit42df5ee8b879361858cae19e276540db::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
