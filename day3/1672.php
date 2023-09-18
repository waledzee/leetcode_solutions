<?php 

$accounts = array(array(1,5),array(3,7),array(1,7));



function SumArray(array $array)
{
    $sum=0;
    for($i=0; $i<count($array); $i++)
    {
        $sum+=$array[$i];
    }

    return $sum;

}

function maximumWealth($accounts) {

    $max=0;
    $sum=0;

    for($i=0; $i<count($accounts); $i++)
    {
        $sum=SumArray($accounts[$i]);


        if($max<$sum)
        {
            $max=$sum;
        }
    }

    echo $max;
    
}


maximumWealth($accounts);
