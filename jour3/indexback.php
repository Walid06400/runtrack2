<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $operation = $_POST['operation'];

    switch($operation) {
        case 'addition':
            $result = $a + $b;
            break;
        case 'soustraction':
            $result = $a - $b;
            break;
        case 'multiplication':
            $result = $a * $b;
            break;
        case 'division':
            if($b != 0) {
                $result = $a / $b;
            } else {
                echo "Erreur : Division par zéro.";
                exit();
            }
            break;
    }

    echo "et boom!! " . $result;
}
?>

</body>
</html>