<?php
$tab = array(1, 2, 3, 4, 5);

function plusGrand($tab) {
    if (empty($tab)) {
        return null; 
    }
    return max($tab);
}
?>