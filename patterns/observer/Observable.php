<?php

/**
 * Description of Observable
 *
 * @author kafka
 */
class Observable {

    private $observers = array();

    public function register($object) {
        if ($object instanceof Observer) {
            $this->observers[] = $object;
        } else {
            echo 'Object must implement Observer Interface<br>';
        }
    }

    public function stateChange() {
        foreach ($this->observers as $observer) {
            $observer->notify();
        }
    }

}
