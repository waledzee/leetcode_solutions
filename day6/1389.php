<?php 

$nums = array(0,1,2,3,4);
$index = array(0,1,2,2,1);
// function createTargetArray($nums, $index) {

//     $ans=[];

    
//       for($i=0; $i<count($nums); $i++)
//       {
//         if(isset($ans[$index[$i]]))
//             {
//              for($j=count($ans);$j>$index[$i];$j--)
//                 $ans[$j] = $ans[$j-1];   
//             }

//           $ans[$index[$j]]=$nums[$j];
//       }


    

//     print_r($ans);
    
// }


function createTargetArray2($nums, $index) {
       
  for($i=0;$i<count($index);$i++){
  if(isset($target[$index[$i]]))
      {
       for($j=count($target);$j>$index[$i];$j--)
          $target[$j] = $target[$j-1];   
      }
      $target[$index[$i]] = $nums[$i];
  }
  
return $target;
}

// createTargetArray($nums,$index);
createTargetArray2($nums,$index);
?>