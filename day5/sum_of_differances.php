<?php 


function leftRightDifference($nums) {
    $leftSum = [0];
    $rightSum = [0];
    $sum = 0;
    for($i=0;$i < count($nums)-1;$i++) {$sum += $nums[$i]; array_push($leftSum,$sum);}
    $sum = 0;
    for($i=count($nums)-1;$i > 0;$i--) {$sum += $nums[$i]; array_push($rightSum,$sum);}

    return array_map(function($left,$right){return abs($left - $right);}, $leftSum , array_reverse($rightSum));
}

?>