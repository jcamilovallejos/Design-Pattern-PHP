<?php
/* Juan camilo vallejos */
/* PHP, Python and Go backend developer */

class Book{
    public $book_title;
    public $book_author;

    public function __construct($title,$author){
        $this->book_title = $title;
        $this->book_author = $author;
    }
    
    public function getNameAndAuthor(){
        return $this->book_title . ' by ' . $this->book_author;
    }
}

class BookFactory{
    
    public static function create($title, $author){
        $book = new Book($title,$author);
        return $book;
    }
}


$book = BookFactory::create('Cien años de soledad','Gabriel Garcia Marquez');
echo 'Books info: ' . $book->getNameAndAuthor();


?>
