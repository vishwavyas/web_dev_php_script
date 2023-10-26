<?php
//55 Develop a PHP script that uses the array_key_first() and array_key_last() functions to retrieve the first and last keys of an array.
$array = array("a" => "red", "b" => "green", "c" => "blue");

$keys = array_keys($array);

$first_key = $keys[0];

$last_key = end($keys);



echo "First => $first_key \n";

echo "Last => $last_key";

?>