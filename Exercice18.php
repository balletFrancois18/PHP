<?php
$mdp = "Francois";

function verificationPassword($mdp) {
    if (strlen($mdp) < 8) {
        return false;
    }

  
    if (!preg_match('/[0-9]/', $mdp)) {
        return false;
    }


    if (!preg_match('/[A-Z]/', $mdp)) {
        return false;
    }

   
    if (!preg_match('/[a-z]/', $mdp)) {
        return false;
    }

  
    return true;
}
?>
