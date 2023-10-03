<?php 

function removeDigit($number, $digit) {
    $ind=[];
    for($i=0;$i<strlen($number);$i++)
    {
       
        if($number[$i]==$digit)
        {
            $ind[]=$i;
        }
    }

    echo $number . "   ";
    $max=substr_replace($number, '', $ind[0], 1);

  
    // echo $max;
    if(count($ind)>1){
        
    for($j=1;$j<strlen($max);$j++)
    {
        $res=substr_replace($number, '',$ind[$j],1);

        
        if( (int)$max< (int)$res)
        {
            $max= $res;
            
            return $max;
            
        }
    }
         }
         else
    {
        return $max;
    }
    
    return $max;
}

echo removeDigit("192833335","3");

?>