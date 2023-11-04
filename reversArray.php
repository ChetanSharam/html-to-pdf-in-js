<?php
/* 

	Reverses an array, you can iterate through the array and build a new array in reverse order. Here's a sample PHP function to reverse an array:


	Sample Input and Output:
	
	input: [1, 2, 3, 4, 5];

	output:
	Array
	(
	    [0] => 5
	    [1] => 4
	    [2] => 3
	    [3] => 2
	    [4] => 1
	)





/* --------------------------------------------------------- */


	$array = [1, 2, 3, 4, 5];

	function reversArray($array=null)
	{
	    $size = sizeof($array);
	    $aa = array();

	    for($i=$size-1; $i>=0; $i--)
	    {
	        $aa[] = $array[$i];
	    }
	    return $aa;
	}

	$rev_arr = reversArray($array);
	echo "<pre>"; print_r($rev_arr);


/* --------------------------------------------------------- */

	function reverseArray1($inputArray) {
    	return array_reverse($inputArray);
	}

	$inputArray = [1, 2, 3, 4, 5];
	$result = reverseArray1($inputArray);

	print_r($result);

/* --------------------------------------------------------- */

?>