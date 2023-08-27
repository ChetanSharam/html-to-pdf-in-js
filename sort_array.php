<?php
 $array = array(1, 6, 23, 10, 3, 2, 15,7);
 $total = count($array);
 
   for($i=0; $i<$total; $i++)
   { 
 	 for($j=$i+1; $j<$total; $j++)
    { 
    	if($array[$i] > $array[$j])
      {       
          $temp = $array[$i];
          $array[$i]=$array[$j];
          $array[$j]=$temp;
      }
 	 }
   }
 
 echo "<pre>";print_r($array);
 echo "<br>";

   $array1 = array(1, 6, 23, 10, 3, 2, 15,7);
   $total = array_product($array);
   $return = array();
   for($i =1; $i<$total; $i++)
   {
      if(in_array($i,$array1))
      {
         $return[] = $i;
      }
   }

   echo "<pre>";print_r($return);
   echo "<br>";
?>
