<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e5wwwgpxvrs10nooio3quo991og4yl7
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\Flysystem\\Cached\\' => 24
        ),
        'G' => 
        array (
            'Google\\' => 7
        ),
        'H' => 
        array (
            'Hypweb\\Flysystem\\GoogleDrive\\' => 29,
            'Hypweb\\elFinderFlysystemDriverExt\\' => 34
        ),
        'K' => 
        array (
            'Kunnu\\Dropbox\\' => 14
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\Flysystem\\Cached\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem-cached-adapter/src'
        ),
        'Google\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/apiclient/src'
        ),
        'Hypweb\\Flysystem\\GoogleDrive\\' => 
        array (
            0 => __DIR__ . '/..' . '/nao-pon/flysystem-google-drive/src',
        ),
        'Hypweb\\elFinderFlysystemDriverExt\\' => 
        array (
            0 => __DIR__ . '/..' . '/nao-pon/elfinder-flysystem-driver-ext/src',
        ),
        'Kunnu\\Dropbox\\' => 
        array (
            0 => __DIR__ . '/..' . '/kunalvarma05/dropbox-php-sdk/src/Dropbox'
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6e5wwwgpxvrs10nooio3quo991og4yl7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6e5wwwgpxvrs10nooio3quo991og4yl7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
