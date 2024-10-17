<?php
$mdp = "Francois";
function verificationPassword($mdp) {
    if (strlen($mdp) >= 8) {
        return true;
}
return false;
}
?>