<?php

/**
 * Description of StaticTester
 *
 * @author kafka
 */
class StaticTester {

    private static $id = 0;

    public function __construct() {
        self::$id += 1;
    }

    public static function checkIdFromStaticMethod() {
        echo "Current ID from Static Method is " . self::$id . "<br>";
    }

    public function checkIdFromNonStaticMethod() {
        echo "Current ID from Non Static Method is " . self::$id . "<br>";
    }

}

