<?php


function countSmaller($nums) {
    $ans=[];
    for($i = 0; $i< count($nums);$i++)
    {
        for($j = $i+1; $j< count($nums);$j++)
        {
            if($nums[$j]>$nums[$j])
             $ans[]=$nums[$j];
            else 
            $ans[]=0;

        }
    }
    
    print_r($ans);
}


countSmaller(array(5,2,6,1));