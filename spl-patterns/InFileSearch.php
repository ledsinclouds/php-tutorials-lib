<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once(LIBRARY . 'spl/searchiterator.inc');

class InFileSearch extends SearchIterator {

  protected $search;

  public function __construct($it, $search) {
    parent::__construct($it);
    $this->search = $search;
  }

  //If the substring is found then accept
  public function accept() {
    return (strpos($this->current(), $this->search) !== FALSE);
  }
}

class FileContentFilter extends FilterIterator {

  protected $search;

  public function __construct($it, $search) {
    parent::__construct($it);
    $this->search = $search;
  }

  public function accept() {
    //Current holds a file name
    $fo = new SplFileObject($this->current());

    //Search within the file
    $file = new InFileSearch($fo, $this->search);

    //Accept if more than one line was found
    return (count(iterator_to_array($file)) > 0);
  }
}

