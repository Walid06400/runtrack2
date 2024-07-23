<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Parité des Nombres</title>
</head>
<body>
    <?php
    $nombres = array(200, 204, 173, 98, 171, 404, 459);

    $taille = count($nombres);

    for ($i = 0; $i < $taille; $i++) {
        $nombre = $nombres[$i];
        if ($nombre % 2 == 0) {
            echo $nombre . " est paire<br />";
        } else {
            echo $nombre . " est impaire<br />";
        }
    }
    ?>
</body>
</html>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Parité des Nombres</title>
</head>
<body>
    <?php
    $nombres = array(200, 204, 173, 98, 171, 404, 459);

    $nombre = $nombres[0];
    if ($nombre % 2 == 0) {
        echo $nombre . " est paire<br />";
    } else {
        echo $nombre . " est impaire<br />";
    }

    $nombre = $nombres[1];
    if ($nombre % 2 == 0) {
        echo $nombre . " est paire<br />";
    } else {
        echo $nombre . " est impaire<br />";
    }

    $nombre = $nombres[2];
    if ($nombre % 2 == 0) {
        echo $nombre . " est paire<br />";
    } else {
        echo $nombre . " est impaire<br />";
    }

    $nombre = $nombres[3];
    if ($nombre % 2 == 0) {
        echo $nombre . " est paire<br />";
    } else {
        echo $nombre . " est impaire<br />";
    }

    $nombre = $nombres[4];
    if ($nombre % 2 == 0) {
        echo $nombre . " est paire<br />";
    } else {
        echo $nombre . " est impaire<br />";
    }

    $nombre = $nombres[5];
    if ($nombre % 2 == 0) {
        echo $nombre . " est paire<br />";
    } else {
        echo $nombre . " est impaire<br />";
    }

    $nombre = $nombres[6];
    if ($nombre % 2 == 0) {
        echo $nombre . " est paire<br />";
    } else {
        echo $nombre . " est impaire<br />";
    }
    ?>
</body>
</html>
