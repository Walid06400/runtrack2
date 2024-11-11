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

    // Requête SQL pour récupérer le nom des salles et le nom de leur étage
    $sql = "SELECT salles.nom AS salle, etage.nom AS etage
            FROM salles
            JOIN etage ON salles.id_etage = id_etage";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Récupérer les résultats sous forme de tableau associatif
    $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Vérifier s'il y a des résultats
    if (count($resultats) > 0) {
        // Afficher les résultats dans un tableau HTML
        echo "<table border='1'>";
        
        // Afficher la première ligne avec les noms des champs
        echo "<tr><th>Nom de la salle</th><th>Nom de l'étage</th></tr>";
        
        // Afficher les données des salles et de leurs étages
        foreach ($resultats as $row) {
            echo "<tr>";
            echo "<td>" . $row['salle'] . "</td>";
            echo "<td>" . $row['etage'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Aucune donnée trouvée.";
    }

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
