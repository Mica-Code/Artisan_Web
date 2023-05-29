<?php
$array = array(1 => "All");
$key = 27;
$value = "It works";
$array[$key] = $value;

foreach($array as $newKey => $newValue){
	echo "The Key is ".$newKey." And the value is ".$newValue.".<br><br>";
}
?>