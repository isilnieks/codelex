<?php

require_once 'Book.php';
require_once 'BookCollection.php';

/*$wrong = [
    new Book(),
    123123123,
    'woof'
];
var_dump($wrong);*/

$books = new BookCollection();
$books->add(new Book());

var_dump($books);

/*foreach ($books->all() as $book)
{
    echo $book->name();
}*/

//Wrong
/*$x = (int) readline('Delete?');
try {
    $books->removeAt($x);
} catch(InvalidArgumentException $exception) {
}*/

//lets program keep running
try {
    $books->removeAt(1);
    //dont use Exception $exception (overwrites all other exceptions)
} catch(InvalidArgumentException $exception) {
    var_dump($exception->getMessage());
}

var_dump($books);
