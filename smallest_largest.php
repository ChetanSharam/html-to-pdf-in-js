<?php
	$array = array(2,7,10,25,35,65,1);
	$largest = $array[0];
	for($i=0; $i<count($array); $i++) {
		
		if($array[$i] > $largest)
		{
			$largest = $array[$i];
		}
	}
	echo "Largest Value :";print_r($largest);
	echo "<br>";

	$array1 = array(2,7,10,25,35,65,1);
	$smallest = $array[0];
	for($i=0; $i<count($array1); $i++) {
		
		if($array[$i] < $smallest)
		{
			$smallest = $array[$i];
		}
	}
	echo "Smallest Value :";print_r($smallest);
?>