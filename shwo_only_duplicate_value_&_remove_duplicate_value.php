<?php 
// remove duplicate value by first method
	$arr = array(8,9,10,3,4,8,7,9,11,3);
	$inputarray = array();
	for($i = 0; $i<count($arr); $i++)
	{
		if(!in_array($arr[$i],$inputarray))
		{
			$inputarray[] = $arr[$i];
		}
	}
	echo "<pre>"."remove duplicate value by first method :";print_r($inputarray);
		echo "<br>";
	// remove duplicate value by second method
		echo "remove duplicate value by second method :";
	$arr = array(8,9,10,3,4,8,7,9,11,3);
	foreach($arr as $key => $val)
	{
	  unset($arr[$key]); 
	  if (!in_array($val,$arr))
	  {
	    echo $val . ",";
	  }
	} 
		
	echo "<br>";
	//show only duplicate value
	echo "show only duplicate value :";
	$arr = array(8,9,10,3,4,8,7,9,11,3);
	foreach($arr as $key => $val)
	{
	  unset($arr[$key]); 
	  if (in_array($val,$arr))
	  {
	    echo $val . ",";
	  }
	} 
?>