<?php
function listHTML($titre, $elements) {
    // Vérifie si le titre est vide ou si le tableau est vide
    if (empty($titre) || empty($elements)) {
        return null;
    }

    // Commence à construire la liste HTML
    $html = "<h3>$titre</h3><ul>";

    // Ajoute chaque élément du tableau à la liste
    foreach ($elements as $element) {
        $html .= "<li>$element</li>";
    }

    // Termine la liste HTML
    $html .= "</ul>";

    return $html;
}

// Exemple d'utilisation
$resultat = listHTML("Capitale", ["Paris", "Berlin", "Moscou"]);
echo $resultat; // Affiche le code HTML de la liste

$resultatVide = listHTML("", []);
var_dump($resultatVide); // Affiche null
?>
