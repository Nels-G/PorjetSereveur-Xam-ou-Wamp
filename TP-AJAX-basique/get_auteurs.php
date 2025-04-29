<?php
$conn = new mysqli("localhost", "root", "", "biblio");

// On récupère l'id envoyé depuis AJAX
$idAuteur = intval($_GET['idAuteur']);

// Sélectionne les livres de cet auteur
$result = $conn->query("SELECT * FROM livres WHERE idAuteur = $idAuteur");

$livres = [];
while ($row = $result->fetch_assoc()) {
    $livres[] = $row;
}

// Renvoie les livres en JSON
echo json_encode($livres);
?>
