<?php 

$word1 = ["ab", "c"];
    $str1="";
    $str2="";

    for($i=0;$i<count($word1);$i++)
    {
        $str1.=$word1[$i];
    }
    for($i=0;$i<count($word2);$i++)
    {
        $str2.=$word2[$i];
    }
    
    if($str1==$str2)
    {
        return true;
    }
    else{
        return false;
    }
    echo $str1;
?>