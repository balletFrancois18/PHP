<?php
$tab = array(1, 2, 2, 2, 2, 2, 2, 2, 2);

function dernierElementTableau($tab) {
    if (empty($tab)) {
        return null; 
    }
    return end($tab);
}
?>