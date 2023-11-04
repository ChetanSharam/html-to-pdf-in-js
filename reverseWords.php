<?php
/* 

	PHP function called reverseWords that takes a sentence as a string and returns a new string with the words in reverse order, but each word should remain unchanged. The sentence is made up of alphabetic characters and spaces only. There will be no punctuation or special characters.


	Sample Input and Output:

	Input: "See PHP Magic"
	Output: "Magic PHP See"

	Input: "This is a Magic"
	Output: "magic a is This"

*/


/* --------------------------------------------------------- */

	function reverseWords($str=null)
	{
		if($str != "")
		{
			$rev_str = "";
			$explode = explode(" ",$str);
			for($i=count($explode)-1; $i>=0; $i--){	
				$rev_str .= $explode[$i]." ";
			}
			return $rev_str;
		}else{
			echo "Please enter any name or string.";
		}		
	}
	echo reverseWords("See PHP Magic");
	echo "<br>";
	echo reverseWords("This is a Magic");

/* --------------------------------------------------------- */
?>