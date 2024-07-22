<?php

function pourcentagealcool ($quantitetotal , $quantitealcool ,){
    $pourcentagealcool= ($quantitetotal/$quantitealcool)* 100;
    return $ourcentagealcool ;
}

$quantitetotal=50;

$pourcentagevodka = pourcentagealcool(12, $quantitetotal);
$pourcentagerhum = pourcentagealcool(40, $quantitetotal);
$pourcentagewhisky = pourcentagealcool(15, $quantitetotal);

echo "<h1>Le pourcentage d'alcool est de " . $pourcentagevodka . "% pour la vodka</h1>";
echo "<h1>Le pourcentage d'alcool est de " . $pourcentagerhum . "% pour le rhum</h1>";
echo "<h1>Le pourcentage d'alcool est de " . $pourcentagewhisky . "% pour le wisky</h1>";
?>



