<?php
$tab = array(1, 2, 3, 4, 5);

function plusPetit($tab) {
    if (empty($tab)) {
        return null; 
    }
    return min($tab);
}
?>