<?php
$x=4;
$y=5;
echo "Before swap Value of x & y :".$x."      ".$y."<br>";
$y=$x+$y;
$x=$y-$x;
$y=$y-$x;
echo "After swap value of x & y:".$x." ".$y; 
?>
