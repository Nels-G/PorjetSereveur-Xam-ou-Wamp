<?php include('../includes/db.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Ajouter un emploi du temps</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

  <h2>Formulaire d'ajout d'un cours</h2>

  <form method="post" action="../api/addCours.php">
    <label>Professeur :</label>
    <input type="text" name="professeur" required><br>

    <label>Module :</label>
    <input type="text" name="module" required><br>

    <label>Classe :</label>
    <input type="text" name="classe" required><br>

    <label>Salle :</label>
    <input type="text" name="salle" required><br>

    <label>Jour :</label>
    <select name="jour" required>
      <option value="Lundi">Lundi</option>
      <option value="Mardi">Mardi</option>
      <option value="Mercredi">Mercredi</option>
      <option value="Jeudi">Jeudi</option>
      <option value="Vendredi">Vendredi</option>
    </select><br>

    <label>Heure début :</label>
    <input type="time" name="heure_debut" required><br>

    <label>Heure fin :</label>
    <input type="time" name="heure_fin" required><br>

    <button type="submit">Ajouter</button>
  </form>

</body>
</html>
