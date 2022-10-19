<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit0b8a4b513c31f6b941f36b08b2d19f65
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

        spl_autoload_register(array('ComposerAutoloaderInit0b8a4b513c31f6b941f36b08b2d19f65', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit0b8a4b513c31f6b941f36b08b2d19f65', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit0b8a4b513c31f6b941f36b08b2d19f65::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
