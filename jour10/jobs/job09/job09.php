<?php
// Informations de connexion à la base de données
$host = 'localhost';
$dbname = 'jour09';
$username = 'root';
$password = '';

try {
    // Connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour sélectionner toutes les informations des salles triées par capacité décroissante
    $sql = "SELECT * FROM salles ORDER BY capacite DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Récupérer les résultats sous forme de tableau associatif
    $salles = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Vérifier s'il y a des résultats
    if (count($salles) > 0) {
        // Afficher les résultats dans un tableau HTML
        echo "<table border='1'>";
        
        // Afficher la première ligne avec les noms des champs
        echo "<tr>";
        foreach (array_keys($salles[0]) as $field) {
            echo "<th>$field</th>";
        }
        echo "</tr>";

        // Afficher les données des salles
        foreach ($salles as $salle) {
            echo "<tr>";
            foreach ($salle as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Aucune salle trouvée.";
    }

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
