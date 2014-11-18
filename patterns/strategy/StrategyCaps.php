<?php

/**
 * Description of StrategyCaps
 *
 * @author kafka
 */
//include 'StrategyInterface.php';
class StrategyCaps {
    public function showTitle($book_in){
        $title = $book_in->getTitle();
        $this->titleCount++;
        return strtoupper($title);
    }
}
