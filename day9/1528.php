<?php 


$s= "codeleet";
 $indices = array(4,5,6,7,0,2,1,3);
function restoreString($s, $indices) {

  
   
   $result = ''; $new = [];
   for($i=0;$i<count($indices);$i++){
       $new[$indices[$i]] = $s[$i]; }
    for($k=0;$k<count($indices);$k++){ 
        $result .=$new[$k];
   }
   echo $result;
    
      
        
}

restoreString($s,$indices);

?>