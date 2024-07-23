<?php
// Déclaration des variables
$booleanVar = true;
$intVar = 42;
$stringVar = "Hello, world!";
$floatVar = 3.14;

// Génération du tableau HTML
echo "<table>";
echo "<thead><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thead>";
echo "<tbody>";
echo "<tr><td>Booléen</td><td>booleanVar</td><td>$booleanVar</td></tr>";
echo "<tr><td>Entier</td><td>intVar</td><td>$intVar</td></tr>";
echo "<tr><td>Chaîne de caractères</td><td>stringVar</td><td>$stringVar</td></tr>";
echo "<tr><td>Nombre à virgule flottante</td><td>floatVar</td><td>$floatVar</td></tr>";
echo "</tbody>";
echo "</table>";
?>


