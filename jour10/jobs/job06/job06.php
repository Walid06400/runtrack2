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

    // Requête SQL pour compter le nombre total d'étudiants
    $sql = "SELECT COUNT(*) AS nb_etudiants FROM etudiants";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Récupérer le résultat
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Afficher le résultat dans un tableau HTML
    echo "<table border='1'>";
    echo "<tr><th>nb_etudiants</th></tr>"; // Afficher le nom du champ
    echo "<tr><td>" . $result['nb_etudiants'] . "</td></tr>"; // Afficher le nombre total d'étudiants
    echo "</table>";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
