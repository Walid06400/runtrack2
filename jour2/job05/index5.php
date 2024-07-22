<?php
for ($nombre = 1; $nombre <= 1000; $nombre++) {
    $estPremier = true;
    if ($nombre <= 1) {
        $estPremier = false;
    } else {
        for ($i = 2; $i * $i <= $nombre; $i++) {
            if ($nombre % $i === 0) {
                $estPremier = false;
                break;
            }
        }
    }
    if ($estPremier) {
        echo $nombre . "<br />";
    }
}
?>
