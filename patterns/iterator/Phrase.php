<?php

/**
 * Description of Phrase
 *
 * @author kafka
 */
class Phrase implements Iterator {

    protected $_word;
    protected $_position;
    private $_step;

    public function __construct($string, $step = 1) {
        $this->_word = $string;
        $this->setStep($step);
    }

    public function setStep($step) {
        $this->_step = (int) $step;
    }

    public function rewind() {
        $this->_position = 0;
    }

    public function next() {
        $this->_position += $this->_step;
    }

    public function valid() {
        return (isset($this->_word[$this->_position]));
    }

    public function current() {
        return $this->_word[$this->_position];
    }

    public function key() {
        return $this->_position;
    }

}
