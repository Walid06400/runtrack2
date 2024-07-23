<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compte Voyelles et Consonnes</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    // Déclaration de la variable $str avec le texte donné
    $str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

    // Définition des voyelles
    $voyelles = 'aeiouAEIOU';

    // Initialisation du dictionnaire
    $dic = array(
        'voyelles' => 0,
        'consonnes' => 0
    );

    // Parcours de la chaîne de caractères
    $i = 0;
    $str_length = 0;

    // Calculer la longueur de la chaîne
    while (isset($str[$str_length])) {
        $str_length++;
    }

    // Compter les voyelles et consonnes
    while ($i < $str_length) {
        $char = $str[$i];
        // Vérifier si le caractère est une voyelle
        $is_voyelle = false;
        $j = 0;
        while (isset($voyelles[$j])) {
            if ($char == $voyelles[$j]) {
                $is_voyelle = true;
                break;
            }
            $j++;
        }
        // Incrémenter le compteur approprié
        if ($is_voyelle && ($char != ' ' && $char != "'" && $char != ',' && $char != '.')) {
            $dic['voyelles']++;
        } elseif (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z')) {
            $dic['consonnes']++;
        }
        $i++;
    }
    ?>

    <!-- Affichage des résultats dans un tableau HTML -->
    <table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dic['voyelles']; ?></td>
                <td><?php echo $dic['consonnes']; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
