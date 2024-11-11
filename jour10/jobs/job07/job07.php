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

    // Requête SQL pour calculer la superficie totale des étages
    $sql = "SELECT SUM(superficie) AS superficie_totale FROM etage";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Récupérer le résultat
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Afficher le résultat dans un tableau HTML
    echo "<table border='1'>";
    echo "<tr><th>superficie_totale</th></tr>"; // Afficher le nom du champ
    echo "<tr><td>" . $result['superficie_totale'] . "</td></tr>"; // Afficher la superficie totale
    echo "</table>";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
