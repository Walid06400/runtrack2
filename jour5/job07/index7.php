<?php
// Étape 1 : Créez une variable de type string
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Étape 2 : Initialisez une variable pour stocker la nouvelle chaîne
$newStr = "";

// Étape 3 : Trouvez la longueur de la chaîne
$length = 0;
while (isset($str[$length])) {
    $length++;
}

// Étape 4 : Remplacer chaque caractère par le suivant
for ($i = 0; $i < $length - 1; $i++) {
    $newStr .= $str[$i + 1];
}

// Étape 5 : Remplacer le dernier caractère par le premier
$newStr .= $str[0];

// Affichez le résultat
echo $newStr;
?>


<?php
// Étape 1 : Créez une variable de type string
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Étape 2 : Initialisez une variable pour stocker la nouvelle chaîne
$newStr = "";

// Étape 3 : Trouvez la longueur de la chaîne
$length = 0;
while (isset($str[$length])) {
    $length++;
}

// Étape 4 : Utiliser une boucle while pour remplacer chaque caractère par le suivant
$i = 0;
while ($i < $length - 1) {
    $newStr .= $str[$i + 1];
    $i++;
}

// Étape 5 : Remplacer le dernier caractère par le premier
$newStr .= $str[0];

// Affichez le résultat
echo $newStr;
?>

