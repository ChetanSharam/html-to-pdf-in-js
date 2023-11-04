<?php
	$num = 2;
	while($num < 100)
	{
		$divided_no = 0;
		for($i=1; $i<=$num; $i++)
		{
			if(($num%$i)==0)
			{
				$divided_no++;
			}
		}

		if($divided_no < 3)
		{
			echo $num.",";
		}
		
		$num = $num+1;
	}

		
?>
