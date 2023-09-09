<?php
//Write a Function that combines two lists by alternatingly taking element. For example Given two lists [a, b, c] and [1, 2, 3] the function should return [a, 1, b, 2, c, 3]

	$arr = array(1,2,3);
    $arr1 = array('a','b','c');
    $new_array = array();

    foreach($arr1 as $key => $value)
    {
    	$new_array[] = $arr1[$key];
    	$new_array[] = $arr[$key];
    }

    print_r($new_array);