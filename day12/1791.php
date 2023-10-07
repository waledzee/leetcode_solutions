<?php 

function  findCenter($edges)
{
    return (in_array($edges[0][1], $edges[1])) ?  $edges[0][1] :  $edges[0][0];
cd }


echo findCenter(array([1,2],[2,3],[4,2]))
?>