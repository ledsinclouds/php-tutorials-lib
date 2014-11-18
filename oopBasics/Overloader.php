<?php

/**
 * Description of Overloader
 *
 * @author kafka
 */
class Overloader {

    public function __call($method, $arguments) {
        echo  '<pre class="response">';
        echo "You called a method named {$method} with following args<br>";       
        print_r($arguments);
        echo '</pre>';
    }

}

