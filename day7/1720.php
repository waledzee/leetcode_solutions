<?php 


function decode($encoded, $first) {

    $ans[] = $first;
   
    foreach($encoded as $k=> $encode)
    {
        $ans[] = $encode ^ $ans[$k];
    }


    return $ans;
    
    
   
}
?>