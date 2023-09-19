<?php


function smallerNumbersThanCurrent($nums) {

    $ans=[];
   

    for($i = 0; $i < count($nums); $i++) {
        $count=0;
      for($j=0;$j<count($nums);$j++)
      {
          if($nums[$i]>$nums[$j]) $count++;
      }
      $ans[]=$count;

    

    }

print_r($ans);

}


smallerNumbersThanCurrent(array(8,1,2,2,3));