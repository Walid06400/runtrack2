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

    // Requête SQL pour sélectionner le prénom, le nom et la date de naissance des étudiants nés entre 1998 et 2018
    $sql = "SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Récupérer les résultats sous forme de tableau associatif
    $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Vérifier s'il y a des résultats
    if (count($etudiants) > 0) {
        // Afficher les résultats dans un tableau HTML
        echo "<table border='1'>";
        
        // Afficher la première ligne avec les noms des champs
        echo "<tr><th>Prénom</th><th>Nom</th><th>Date de naissance</th></tr>";
        
        // Afficher les données des étudiants
        foreach ($etudiants as $etudiant) {
            echo "<tr>";
            echo "<td>" . $etudiant['prenom'] . "</td>";
            echo "<td>" . $etudiant['nom'] . "</td>";
            echo "<td>" . $etudiant['naissance'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Aucun étudiant trouvé.";
    }

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>

