<?php 

$k=3;

$s="hello word this from egypt ";


$arr=explode(" ",$s);

$res="";
for($i=0;$i<$k;$i++)
{
    $res.=$arr[$i];
    if($i !=$k-1)
    {
    $res.=" "; 
    }
}

echo $res;
?>