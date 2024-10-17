<?php
$arg1=18;
$arg2=19;
$arg3=20;
function plusPetit($arg1,$arg2,$arg3){
    if ($arg1 < $arg2){
        if ($arg1 < $arg3) 
        return $arg1; 
    } 
    else if ($arg2 < $arg3){
    return $arg2;
    }
return $arg3;
    }
?>
