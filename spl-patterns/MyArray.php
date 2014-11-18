<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyArray
 *
 * @author kafka
 */
class MyArray implements ArrayAccess {

    protected $_arr;

    public function __construct() {
        $this->_arr = array();
    }

    public function offsetSet($offset, $value) {
        $this->_arr[$offset] = $value;
    }

    public function offsetGet($offset) {
        return $this->_arr[$offset];
    }

    public function offsetExists($offset) {
        return array_key_exists($offset, $this->_arr);
    }

    public function offsetUnset($offset) {
        unset($this->_arr[$offset]);
    }

}
