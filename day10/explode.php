<?php 

// function explode_own($seprator,$string) :array
// {
//     $res=[];
    
//     // edge cases
//     if($seprator!=" "||$seprator!=".")
//     {
//         return [];
//     }

//     if(gettype($string)!="string")
//     {
//         return [];
//     }
//     $arr = [];  
//     while(strlen($string) > 0)  
//     {  
//       $pos = strpos($string, $seprator);  
//       if($pos)  
//       {  
//         $arr[] = trim(substr($string, 0, $pos));  
//         $string = ltrim(substr($string, $pos), $seprator);  
//       } else {  
//         $arr[] = trim($string);  
//         $string = '';  
//       }  
//     }  
//     return $arr; 
// }

function letsExplode(String $delimiter, String $string): array  
{  
  $arr = [];  
  while(strlen($string) > 0)  
  {  
    $pos = strpos($string, $delimiter);  
    if($pos)  
    {  
      $arr[] = trim(substr($string, 0, $pos));  
      $string = ltrim(substr($string, $pos), $delimiter);  
    } else {  
      $arr[] = trim($string);  
      $string = '';  
    }  
  }  
  return $arr;  
}

// letsExplode(' ', '1 2 3 4 5 6 7 8');

$s="hello form any where that is a test";
$pos = strpos($s, ' ');
// print_r(letsExplode(" ",$s));
$arr[] = trim(substr($string, 0, $pos));
echo $pos;
print_r($arr);

?>