<?php
/* 

	PHP function called reverseString that takes a sentence as a string and returns a new string with the words in reverse order, but each word should remain changed. The sentence is made up of alphabetic characters and spaces only. There will be no punctuation or special characters.


	Sample Input and Output:

	Input: "Hello PHP"
	Output: "PHP olleH"

*/


/* --------------------------------------------------------- */

	function reverseString($str=null)
	{
		if($str != "")
		{
			$rev_str = '';
			$str_count = strlen($str);
			for($i=$str_count-1; $i>=0; $i--)
			{
				$rev_str .= $str[$i];
			}
			return $rev_str;
		}else{
			echo "Please enter any name or string.";
		}
	}
	echo reverseString("Hello PHP");

/* --------------------------------------------------------- */
?>
