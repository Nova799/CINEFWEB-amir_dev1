<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulaire";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->query($sql) === TRUE) {
  echo "Les données ont été enregistrées avec succès.";

  // Récupérer l'ID de l'enregistrement nouvellement inséré
  $id = $conn->insert_id;

  // Rediriger vers la page d'aperçu avec l'ID comme paramètre
  header("Location: apercu.php?id=$id");
  exit();
} else {
  echo "Erreur lors de l'enregistrement des données : " . $conn->error;
}
// Récupérer les valeurs du formulaire
$formation = $_POST['formation'];
$nom = $_POST['nom'];
$entite = $_POST['entite'];
$missions = $_POST['missions'];
$formation_precedente = $_POST['formation-precedente'];
$formation_details = $_POST['formation-details'];
$demande_personnelle = $_POST['demande-personnelle'];
$difficultes = $_POST['difficultes'];
$conseil = $_POST['conseil'];
$objectifs = $_POST['objectifs'];
if (isset($_POST['attentes']) && is_array($_POST['attentes'])) {
  $attentes = implode(", ", $_POST['attentes']);
} else {
  // Gérer l'erreur ou définir une valeur par défaut
  $attentes = "";
}

$autres_priorites = $_POST['autres-priorites'];
$objectif1 = $_POST['objectif1'];
$objectif2 = $_POST['objectif2'];
$objectif3 = $_POST['objectif3'];
$cas_concrets = $_POST['cas-concrets'];
$remarques = $_POST['remarques'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];

// Requête SQL pour insérer les données dans la table
$sql = "INSERT INTO nom_table (formation, nom, entite, missions, formation_precedente, formation_details, demande_personnelle, difficultes, conseil, objectifs, attentes, autres_priorites, objectif1, objectif2, objectif3, cas_concrets, remarques, telephone, email)
VALUES ('$formation', '$nom', '$entite', '$missions', '$formation_precedente', '$formation_details', '$demande_personnelle', '$difficultes', '$conseil', '$objectifs', '$attentes', '$autres_priorites', '$objectif1', '$objectif2', '$objectif3', '$cas_concrets', '$remarques', '$telephone', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Les données ont été enregistrées avec succès.";
} else {
    echo "Erreur lors de l'enregistrement des données : " . $conn->error;
}

// Fermer la connexion à la base de données
$conn->close();
header("Location: apercu.php");
exit();
?>

