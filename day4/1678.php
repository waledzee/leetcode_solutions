<?php 

function interpret($command) {
    function interpret($command) {
        $ans=str_replace(["()","(",")"],["o","",""],$command);

        return $ans;
        
    }
}

$str="G()(al)";

interpret($str);
?>