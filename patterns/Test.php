<?php

/**
 * Description of Test
 *
 * @author kafka
 */
class Test {
    private $test;
    public function __construct($test) {
        $this->test = $test;
    }
    public function getTest(){
        return $this->test;
    }
}

