<?php

class Autoloader{
    /**
     *
     */
    public static function register() {
        spl_autoload_register(array(__class__, 'autoload'));
    }

    /**
     * @param $class
     */
    public static function autoload($class) {
        echo 'Autoload pour : ';
        var_dump($class);
        echo '<br>';
    }
}