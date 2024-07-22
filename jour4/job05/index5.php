<?php

function occurrences($str, $char) {
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $char) {
            $count++;
        }
    }
    return $count;
}


$str = "Bonjour";
$char = "o";
$result = occurrences($str, $char);
echo "Le résultat est $result"; 
?>