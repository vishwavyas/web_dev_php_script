<?php 
  $cites=array("Beirut","bangalore","kashmir");

$pos=4;
$new=array("manali");
array_splice($cites ,$pos,0,$new);
print_r($cites);

?>