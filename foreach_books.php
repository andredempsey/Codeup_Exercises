<?php

//Control Structures II
//Page: 3 of 5
//Date:  13 May 14
//Name:  Andre Dempsey
//Codeup Baddies


$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

//Construct a loop that iterates through each book 
//and then each book's keys and values. 
//Have it output the book's title, 
//then list the key value pairs for the data about each book.

foreach ($books as $key => $book) 
{
    echo "Book title = {$key}\n"; 
    foreach ($book as $keyitems => $bookdata) 
    {
        echo "\t{$keyitems} = {$bookdata}\n";
    }
echo "\n";
}

