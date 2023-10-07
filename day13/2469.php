<?php 


function convertTemperature($celsius) {
    $k=$celsius + 273.15;
    return [$k,$celsius * 1.80 + 32.00];
    
}




?>