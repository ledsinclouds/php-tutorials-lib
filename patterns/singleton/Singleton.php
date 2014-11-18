<?php

/**
 * Description of Singleton
 *
 * @author kafka
 */
//include 'SingletonChild.php';
class Singleton {

    private static $instance;

    public function __construct() {
        if (!self::$instance) {
            self::$instance = $this;
            echo 'New Instance<br>';
            return self::$instance;
        } else {
            echo 'Old Instance';
            return self::$instance;
        }
    }

}
