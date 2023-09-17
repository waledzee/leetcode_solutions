<?php

use function PHPSTORM_META\type;

$operations=array("X++","++X","--X","X--");
       $con=0;
         $c=0;
      

       for($i=0;$i<count($operations);$i++)
       {
        if($operations[$c]=="--X"||$operations[$c]=="X--")
        {
         $con--;
        }
        if($operations[$c]=="X++"||$operations[$c]=="++X")
        {
         $con++;
        }
        $c++;
       }
       
       return $con;

        