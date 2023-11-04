<?php
/* 

	To remove duplicate values from an array in PHP, you can create a function that iterates through the array and keeps track of unique values. Here's a sample PHP function to remove duplicate values from an array: 


	Sample Input and Output:
	
	input: [9,5,6,4,5,7,10,4];

	output:
	Array
	(
	    [0] => 9
	    [1] => 5
	    [2] => 6
	    [3] => 4
	    [4] => 7
	    [5] => 10
	)


*/


/* --------------------------------------------------------- */


	$array = [9,5,6,4,5,7,10,4];

	function removeDuplicateValue($array=null)
	{
	    $a = array();
	    for($i=0; $i<count($array); $i++)
	    {
	        if(!in_array($array[$i],$a))
	        {
	            $a[] = $array[$i];
	        }
	    }
	    return $a;
	}
	
	$rem_dup_arr = removeDuplicateValue($array);
	echo "<pre>"; print_r($rem_dup_arr);

/* --------------------------------------------------------- */



	function removeDuplicateValues($inputArray) {
	    $outputArray = array();
	    foreach ($inputArray as $value) {
	        if (!in_array($value, $outputArray)) {
	            $outputArray[] = $value;
	        }
	    }
	    return $outputArray;
	}	
	$inputArray = [1, 2, 2, 3, 4, 4, 5];
	$result = removeDuplicateValues($inputArray);

	print_r($result);



/* --------------------------------------------------------- */

?>