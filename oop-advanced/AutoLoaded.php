<?php

/**
 * Description of AutoLoaded
 *
 * @author kafka
 */
class AutoLoaded {

    public $test;

    public function __construct($test) {
        $this->test = $test;
    }
    public function getTest(){
        return $this->test;
    }

}

