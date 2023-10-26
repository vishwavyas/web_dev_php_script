<?php
//54 Create a PHP script that extracts a specific column from a multidimensional array using the array_column() function.
$a = array(

  array(

    'id' => 5698,

    'first_name' => 'vishwa',

    'last_name' => 'vyas',

  ),

  array(

    'id' => 4767,

    'first_name' => 'shyam',

    'last_name' => 'vyas',

  ),

  array(

    'id' => 3809,

    'first_name' => 'bhavan',

    'last_name' => 'bhatt',

  )

);



$last_names = array_column($a, 'last_name');

print_r($last_names);

?>