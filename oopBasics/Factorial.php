<?php

/**
 * Description of Factorial
 *
 * @author kafka
 */

class Factorial {

    private $result = 2;
    private $number;

    public function Factorial($number) {
        $this->number = $number;
        for ($i = 2; $i <= $number; $i++) {
            $this->result *= $i;
        }
    }

    public function showResult() {
        echo "Factorial of {$this->number} is {$this->result} :: {$this->__destruct()}";
    }

    function __destruct() {
        return " Object Destroyed.";
    }

}

