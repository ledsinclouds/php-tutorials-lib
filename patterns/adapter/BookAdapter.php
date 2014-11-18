<?php

/**
 * Description of BookAdapter
 *
 * @author kafka
 */
class BookAdapter {
    private $book;
    public function __construct(SimpleBook $book_in) {
        $this->book = $book_in;
    }
    public function getAuthAndTitle(){
        return $this->book->getTitle() . ' by ' . $this->book->getAuthor();
    }
}

