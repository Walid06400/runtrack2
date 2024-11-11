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

    // Requête SQL pour calculer la capacité totale des salles
    $sql = "SELECT SUM(capacite) AS capacite_totale FROM salles";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Récupérer le résultat
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Afficher le résultat dans un tableau HTML
    echo "<table border='1'>";
    echo "<tr><th>capacite_totale</th></tr>"; // Afficher le nom du champ
    echo "<tr><td>" . $result['capacite_totale'] . "</td></tr>"; // Afficher la capacité totale
    echo "</table>";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
