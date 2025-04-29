<?php
// Connexion à la base MySQL
$conn = new mysqli("localhost", "root", "", "biblio");

// Exécute la requête SQL
$result = $conn->query("SELECT * FROM auteurs");

// Met chaque ligne dans un tableau PHP
$auteurs = [];
while ($row = $result->fetch_assoc()) {
    $auteurs[] = $row;
}

// Convertit le tableau en JSON pour l’envoyer à JavaScript
echo json_encode($auteurs);
?>
