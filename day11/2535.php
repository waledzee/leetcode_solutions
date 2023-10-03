<?php

function differenceOfSum($nums) {

    $dsum=0;
    $esum=0;

    for($i=0;$i<count($nums);$i++)
    {
        $esum+=$nums[$i];
    }
    for($i=0;$i<count($nums);$i++)
    {
        if($nums[$i]>9)
        {
            $stri = (string)$nums[$i];
            for($j=0;$j<strlen($stri);$j++)
            {
            
            $t=intval($stri[$j]);
            $dsum+=$t;
            }
            
        }
        else{
        $dsum+=$nums[$i];
        }
    }

     return abs($esum-$dsum);
    
    
}

//echo differenceOfSum(array(1,15,6,3));

 $test=join("",array(1,15,6,3));
 echo gettype($test);
// echo array_sum(array(1,15,6,3));


