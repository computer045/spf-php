<?php

/**
 * Class Redirect
 *
 * Simple abstraction for redirecting the user to a certain page.
 */
class Redirect
{
    /**
     * Redirects to the homepage.
     */
    public static function home()
    {
        header("location: " . Config::get('URL'));
    }

    /**
     * Redirects to a RELATIVE path, like "about/index"
     *
     * @param $path string
     */
    public static function to($path)
    {
        header("location: " . Config::get('URL') . $path);
    }
}
