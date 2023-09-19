<?php

$nums = array(-6,2,5,-2,-7,-1,3);
$terget=-2

 $ans = 0;
for($i = 0; $i < count($nums); ++$i){
    for($j = $i + 1; $j < count($nums); ++$j){
        if($nums[$i] + $nums[$j] < $target) $ans++;
    }
}
echo $ans;