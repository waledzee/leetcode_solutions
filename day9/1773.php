<?php 
function countMatches($items, $ruleKey, $ruleValue) {
    $c=0;
    
        if($ruleKey == "type" ){
      $ruleKey = 0;
   }else if($ruleKey == "color"){
     $ruleKey = 1;
   }else if($ruleKey == "name"){
     $ruleKey = 2;
   }
        
       $count = count($items);
    $data = [];
    for($i = 0;$i<$count;$i++){
      if($items[$i][$ruleKey] == $ruleValue){
        $data[] = $items[$i];
      }
    }

    $res=count($data);
    return $res;
    
}


