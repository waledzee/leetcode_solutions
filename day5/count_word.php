<?php 


$sentences = ["alice and bob love leetcode", "i think so too", "this is great thanks very much"];
function mostWordsFound($sentences) {

    $count=0;
    $max=0;
    for($i=0;$i<count($sentences);++$i)
    {
       

       $count+=str_word_count($sentences[$i]);
       
       if($count>$max) $max=$count;

       $count=0;


    }

    return $max;
    
}

mostWordsFound($sentences);

?>