<?php
//33 Create a PHP script to check if a specific key exists in an associative array using the array_key_exists() function.
$a=array("Vishwa"=>"21","Bhavan"=>"20");

if (array_key_exists("Vishwa",$a))

  {

  echo "Key exists!";

  }

else

  {

  echo "Key does not exist!";

  }

?>