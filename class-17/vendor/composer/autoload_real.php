<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbb9ce0de88442300e9179a486b8027ed
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitbb9ce0de88442300e9179a486b8027ed', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbb9ce0de88442300e9179a486b8027ed', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbb9ce0de88442300e9179a486b8027ed::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
