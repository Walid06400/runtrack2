<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compter les Caractères</title>
</head>
<body>
    <?php
    // Déclaration de la variable $str avec le texte donné
    $str = "Dans l'espace, personne ne vous entend crier";

    // Initialisation de la variable pour le compteur de caractères
    $count = 0;

    // Parcours de la chaîne de caractères
    $i = 0;
    while (isset($str[$i])) {
        // Incrémentation du compteur
        $count++;
        $i++;
    }

    // Affichage du nombre de caractères
    echo "Le nombre de caractères dans la chaîne est : " . $count;
    ?>
</body>
</html>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compter les Caractères</title>
</head>
<body>
    <?php
    // Déclaration de la variable $str avec le texte donné
    $str = "Dans l'espace, personne ne vous entend crier";

    // Initialisation de la variable pour le compteur de caractères
    $count = 0;

    // Parcours de la chaîne de caractères
    $i = 0;
    while ($str[$i] !== null) {
        // Incrémentation du compteur
        $count++;
        $i++;
    }

    // Affichage du nombre de caractères
    echo "Le nombre de caractères dans la chaîne est : " . $count;
    ?>
</body>
</html>
