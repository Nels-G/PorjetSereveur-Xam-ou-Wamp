<?php
require_once('../includes/db.php');

// Vérifier que tous les champs sont présents
if (
    isset($_POST['professeur'], $_POST['module'], $_POST['classe'],
          $_POST['salle'], $_POST['jour'], $_POST['heure_debut'], $_POST['heure_fin'])
) {
    $professeur = $_POST['professeur'];
    $module     = $_POST['module'];
    $classe     = $_POST['classe'];
    $salle      = $_POST['salle'];
    $jour       = $_POST['jour'];
    $heure_debut = $_POST['heure_debut'];
    $heure_fin   = $_POST['heure_fin'];

    // Préparation de la requête SQL
    $stmt = $pdo->prepare("INSERT INTO emploi_du_temps (professeur, module, classe, salle, jour, heure_debut, heure_fin)
                           VALUES (?, ?, ?, ?, ?, ?, ?)");
    $result = $stmt->execute([
        $professeur,
        $module,
        $classe,
        $salle,
        $jour,
        $heure_debut,
        $heure_fin
    ]);

    if ($result) {
        echo "Cours ajouté avec succès.";
        header('Location: ../views/emploi.php'); // Rediriger vers la vue principale
        exit;
    } else {
        echo "Erreur lors de l'ajout.";
    }
} else {
    echo "Champs manquants.";
}
