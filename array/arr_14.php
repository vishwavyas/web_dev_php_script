<?php 
//Remove the email element from the associative array and display the updated array.
$person=array("name"=>"vishwa","age"=>19,"email"=>"vishwa@gmail.com");

$remove=array_pop($person);

echo"removed array is :";
print_r($remove);

echo "<br>";
print_r ($person);

?>