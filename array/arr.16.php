<?php
//Create an indexed array of cities you want to visit in the future.

    $cites=array("Beirut","bangalore","kashmir");

    rsort($cites);
  
  foreach($cites as $city)
  {
      print_r($city);
      echo "<br>";
  }
?>