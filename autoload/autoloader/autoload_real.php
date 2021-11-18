<?php

class AutoloaderInit
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Autoloader\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Autoloader\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('AutoloaderInit', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Autoloader\Autoload\ClassLoader();
        spl_autoload_unregister(array('AutoloaderInit', 'loadClassLoader'));

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }

        $map = require __DIR__ . '/autoload_psr4.php';
        foreach ($map as $namespace => $path) {
            $loader->setPsr4($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        $includeFiles = require __DIR__ . '/autoload_files.php';
        
        foreach ($includeFiles as $fileIdentifier => $file) {
            autoloaderRequire($fileIdentifier, $file);
        }

        return $loader;
    }
}

function autoloaderRequire($fileIdentifier, $file)
{
    if (empty($GLOBALS['__autoloader_autoload_files'][$fileIdentifier])) {
        require $file;

        $GLOBALS['__autoloader_autoload_files'][$fileIdentifier] = true;
    }
}
