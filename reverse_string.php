<?php

/* --------------------------------------------------------- */

	$array = [9,5,6,4,5,7,10,4];
	function revers_string($str=null)
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
	echo revers_string("php");
	
/* --------------------------------------------------------- */
?>