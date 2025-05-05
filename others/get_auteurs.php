<?php
$conn = new mysqli("localhost", "root", "", "biblio");
$result = $conn->query("SELECT * FROM auteurs");

$auteurs = [];
while ($row = $result->fetch_assoc()) {
    $auteurs[] = $row;
}
echo json_encode($auteurs);
