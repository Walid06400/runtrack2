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

    // Requête SQL pour calculer la capacité moyenne des salles
    $sql = "SELECT AVG(capacite) AS capacite_moyenne FROM salles";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Récupérer le résultat sous forme de tableau associatif
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Afficher le résultat dans un tableau HTML
    echo "<table border='1'>";
    
    // Afficher la première ligne avec le nom du champ
    echo "<tr><th>capacite_moyenne</th></tr>";
    
    // Afficher la capacité moyenne
    echo "<tr><td>" . $result['capacite_moyenne'] . "</td></tr>";

    echo "</table>";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>

