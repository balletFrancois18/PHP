<?php
function triangle($nb_lignes) {

    for ($i = 1; $i <= $nb_lignes; $i++) {

        echo str_repeat("*", $i) . "\n";
    }
}


triangle(10);
?>