<?php
$conn = new mysqli("localhost", "root", "", "biblio");

$idAuteur = intval($_GET['idAuteur']);
$result = $conn->query("SELECT * FROM livres WHERE idAuteur = $idAuteur");

$livres = [];
while ($row = $result->fetch_assoc()) {
    $livres[] = $row;
}
echo json_encode($livres);
