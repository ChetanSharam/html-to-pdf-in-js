<?php
 $array = array(1, 5, 2, 10, 4, 6, 15,9);
 $total = count($array);
 
 for($i=0; $i<$total; $i++)
 {
    for($k=$i+1; $k<$total; $k++)
    {
        if($array[$i] < $array[$k])
        {
            $temp = $array[$i];
            $array[$i] = $array[$k];
            $array[$k] = $temp;
        }
    }
 }
 echo "<pre>";print_r($array);
?>