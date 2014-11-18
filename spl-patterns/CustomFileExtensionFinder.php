<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CustomFileExtensionFinder extends FilterIterator {

    protected $predicate, $path;

    public function __construct($path, $predicate) {
        $this->predicate = $predicate;
        $this->path = $path;

        $it = new RecursiveDirectoryIterator($path);
        $flatiterator = new RecursiveIteratorIterator($it);

        parent::__construct($flatiterator);
    }

    public function accept() {
        $pathinfo = pathinfo($this->current());
        $extension = $pathinfo['extension'];
        return ($extension == $this->predicate);
    }

}
