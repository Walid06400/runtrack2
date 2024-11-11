<?php
// 1. Connexion à la base de données via PDO
$host = "localhost";   // L'hôte de la base de données (souvent 'localhost')
$user = "root";        // Nom d'utilisateur de la base de données
$password = "";        // Mot de passe de la base de données
$database = "jour09";  // Nom de la base de données

try {
    $dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Active les exceptions en cas d'erreurs
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Définit le mode de récupération par défaut en tableau associatif
    ]);
} catch (PDOException $e) {
    die("Connexion échouée: " . $e->getMessage());
}

// 2. Exécution de la requête SQL
$sql = "SELECT * FROM etudiants WHERE prenom LIKE 'T%'";
$stmt = $pdo->query($sql);

// 3. Vérifier si des résultats sont retournés
$results = $stmt->fetchAll();

if ($results) {
    // 4. Création du tableau HTML
    echo "<table border='1'>";

    // Création de l'en-tête du tableau (thead)
    echo "<thead>";
    echo "<tr>";

    // Affichage des noms de colonnes
    $columns = array_keys($results[0]); // Récupère les noms des colonnes depuis la première ligne
    foreach ($columns as $column) {
        echo "<th>" . htmlspecialchars($column) . "</th>"; // Utilisation de htmlspecialchars pour éviter les injections HTML
    }

    echo "</tr>";
    echo "</thead>";

    // Création du corps du tableau (tbody)
    echo "<tbody>";

    // Parcourir chaque ligne des résultats et les afficher dans le tableau
    foreach ($results as $row) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>"; // Utilisation de htmlspecialchars pour sécuriser l'affichage des données
        }
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "0 résultats";
}
