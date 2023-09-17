<?php

$nums = array(2,5,1,3,4,7);
 $n = 3;

 $arr1=array_slice($nums,0,$n);
 $arr2=array_slice($nums,$n);

 $nums=[];

 for($i=0;$i<$n;$i++)
 {
    $nums[]=$arr1[$i];
    $nums[]=$arr2[$i];

 }

var_dump ($nums);