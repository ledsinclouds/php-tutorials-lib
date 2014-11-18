<?php

/**
 * Description of Users
 *
 * @author kafka
 */
class Users implements ArrayAccess {

    private $users;

    public function __construct() {
        $this->users = array();
    }

    public function offsetExists($key) {
        return isset($this->users[$key]);
    }

    public function offsetGet($key) {
        return $this->users[$key];
    }

    public function offsetSet($key, $val) {
        $this->users[$key] = $val;
    }

    public function offsetUnset($key) {
        unset($this->users[$key]);
    }

}

