<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage des Voyelles</title>
</head>
<body>
    <?php
    // Déclaration de la variable $str avec le texte donné
    $str = "I'm sorry Dave I'm afraid I can't do that";

    // Initialisation de la variable pour stocker le résultat
    $result = '';

    // Définition des voyelles
    $voyelles = 'aeiouAEIOU';

    // Parcours de la chaîne de caractères
    $i = 0;
    while (isset($str[$i])) {
        // Vérification si le caractère est une voyelle
        $j = 0;
        while (isset($voyelles[$j])) {
            if ($str[$i] == $voyelles[$j]) {
                // Ajout de la voyelle au résultat
                $result .= $str[$i];
                break;
            }
            $j++;
        }
        $i++;
    }

    // Affichage du résultat
    echo $result;
    ?>
</body>
</html>
