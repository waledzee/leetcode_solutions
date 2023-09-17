<?php

$count=0;
for($i=0;$i<count($nums);$i++)
{
   for($j=0;$j<$i;$j++)
   {
       if($nums[$i]==$nums[$j])
       {
           $count++;
       }

   }

}
return $count;
