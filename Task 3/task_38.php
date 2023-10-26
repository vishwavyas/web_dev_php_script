<?php
//38 Write a PHP script to use the array_shift() function to remove an element from the beginning of an array and the array_unshift() function to add elements at the beginning.
$a=array("a"=>"red","b"=>"green","c"=>"blue");

echo array_shift($a);

array_unshift($a);

print_r ($a);

?>