<?php

/**
 * Description of WordCounter
 *
 * @author kafka
 */

class WordCounter {

    const ASC = 1;
    const DESC = 2;
    private $words;

    public function __construct($filename) {
        $file_contents = file_get_contents($filename);
        $this->words = (array_count_values(str_word_count(strtolower($file_contents), 1)));
    }

    public function count($order) {
        if ($order == self::ASC)
            asort($this->words);
        else if ($order == self::DESC)
            arsort($this->words);
        foreach ($this->words as $key => $val)
            echo $key . " = " . $val . "<br>";
    }

}
