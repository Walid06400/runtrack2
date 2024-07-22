<?php
function calcule($a, $operation, $b) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            return $a / $b;
        case '%':
            return $a % $b;
        default:
            return "Opération non valide";
    }
}

$a = 10;
$b = 5;

$result = calcule($a, '+', $b);
echo "$a + $b = $result<br>"; // Affiche 10 + 5 = 15

$result = calcule($a, '-', $b);
echo "$a - $b = $result<br>"; // Affiche 10 - 5 = 5

$result = calcule($a, '*', $b);
echo "$a * $b = $result<br>"; // Affiche 10 * 5 = 50

$result = calcule($a, '/', $b);
echo "$a / $b = $result<br>"; // Affiche 10 / 5 = 2

$result = calcule($a, '%', $b);
echo "$a % $b = $result<br>"; // Affiche 10 % 5 = 0
?>
