<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage de Caractères</title>
</head>
<body>
    <?php
    // Déclaration de la variable $str avec le texte donné
    $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

    // Initialisation de la variable pour stocker le résultat
    $result = '';

    // Accès direct aux caractères aux indices pairs
    $i = 0;
    while (isset($str[$i])) {
        // Ajout du caractère au résultat
        $result .= $str[$i];
        // Passer à l'index suivant pair
        $i += 2;
    }

    // Affichage du résultat
    echo $result;
    ?>
</body>
</html>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage de Caractères</title>
</head>
<body>
    <?php
    // Déclaration de la variable $str avec le texte donné
    $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

    // Initialisation de la variable pour stocker le résultat
    $result = '';

    // Parcours de la chaîne de caractères
    for ($i = 0; isset($str[$i]); $i++) {
        // Vérification si l'index est pair
        if ($i % 2 == 0) {
            // Ajout du caractère au résultat
            $result .= $str[$i];
        }
    }

    // Affichage du résultat
    echo $result;
    ?>
</body>
</html>
