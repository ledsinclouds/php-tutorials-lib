<?php

/**
 * Description of Studient
 *
 * @author kafka
 */
class Studient {

//    private $name;
//    private $roll;
    private $properties = array();

    function __get($property) {
        return $this->properties[$property];
    }

    function __set($property, $value) {
        $this->properties[$property] = "AutoSet {$property} as: " . $value;
    }

//    public function setName($name) {
//        $this->name = $name;
//    }
//
//    public function getName() {
//        return $this->name;
//    }
//
//    public function setRoll($roll) {
//        $this->roll = $roll;
//    }
//
//    public function getRoll() {
//        return $this->roll;
//    }
}

