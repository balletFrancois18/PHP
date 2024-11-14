<?php
function triangle($nb_lignes) {
    // Boucle pour chaque ligne du triangle
    for ($i = 1; $i <= $nb_lignes; $i++) {
        // Affiche $i étoiles pour la ligne courante
        echo str_repeat("*", $i) . "\n";
    }
}

// Exemple d'appel de la fonction avec 10 lignes
triangle(10);
?>
