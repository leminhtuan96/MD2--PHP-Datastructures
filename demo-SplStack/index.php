<?php
include_once "Books.php";

$books = new Books();
$books->push("tuan");
$books->push("tu");
$books->push("tan");
$books->push("ti");
$books->push("te");
echo $books->count();
echo "<br>";
echo $books->top();