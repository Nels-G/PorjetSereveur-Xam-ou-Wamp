<?php
header("Content-Type: text/xml");
include("db.php"); // Connexion à MySQL

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
echo "<emploiDuTemps>";

$sql = "SELECT cours.jour_semaine, cours.heure_debut, cours.heure_fin,
               classes.nom AS classe, modules.nom AS module,
               professeurs.nom AS professeur, salles.nom AS salle
        FROM cours
        JOIN classes ON cours.classe_id = classes.id
        JOIN modules ON cours.module_id = modules.id
        JOIN professeurs ON cours.professeur_id = professeurs.id
        JOIN salles ON cours.salle_id = salles.id
        ORDER BY cours.jour_semaine, cours.heure_debut";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    echo "<cours>";
    echo "<jour>" . $row['jour_semaine'] . "</jour>";
    echo "<heureDebut>" . $row['heure_debut'] . "</heureDebut>";
    echo "<heureFin>" . $row['heure_fin'] . "</heureFin>";
    echo "<classe>" . $row['classe'] . "</classe>";
    echo "<module>" . $row['module'] . "</module>";
    echo "<professeur>" . $row['professeur'] . "</professeur>";
    echo "<salle>" . $row['salle'] . "</salle>";
    echo "</cours>";
}

echo "</emploiDuTemps>";
$conn->close();
?>
