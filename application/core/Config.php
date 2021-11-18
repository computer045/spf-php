<?php

/**
 * Class Config
 * 
 * This is the configuration class that is used to get project configuration.
 */
class Config
{
    // This variable is public to simplify unit testing
    public static $config;

    /**
     * Returns the value of the specified key in the configuration file.
     * 
     * @param $key string
     */ 
    public static function get($key)
    {
        if (!self::$config) {

            // Configuration file path
            $config_file = '../application/config/config.php';

            if (!file_exists($config_file)) {
                return false;
            }

            // Include configuration file
            self::$config = require $config_file;
        }

        return self::$config[$key];
    }
}
