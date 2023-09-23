<?php 


$nums = array(1,2,3,4);
function decompressRLElist($nums) {
        
    $ans=[];

   
    for($i=0 ;$i<count($nums); $i+=2 )
    {
        for($j=0; $j<$nums[$i];$j++)
        {
            $ans[]=$nums[$i+1];
        }
    }
        
    

    print_r($ans);
}


decompressRLElist($nums);
?>