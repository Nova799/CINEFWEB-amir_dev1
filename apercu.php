<?php
// Connexion à la base de données
$servername = "localhost";
$username = "nova";
$password = "cnov @";
$dbname = "essai";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Requête SQL pour récupérer les données du formulaire
$sql = "SELECT * FROM nom_table ORDER BY id DESC LIMIT 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Afficher les données
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $formation = $row['formation'];
    $nom = $row['nom'];
    $entite = $row['entite'];
    $missions = $row['missions'];
    $formation_precedente = $row['formation_precedente'];
    $formation_details = $row['formation_details'];
    $demande_personnelle = $row['demande_personnelle'];
    $difficultes = $row['difficultes'];
    $conseil = $row['conseil'];
    $objectifs = $row['objectifs'];
    $attentes = $row['attentes'];
    $autres_priorites = $row['autres_priorites'];
    $objectif1 = $row['objectif1'];
    $objectif2 = $row['objectif2'];
    $objectif3 = $row['objectif3'];
    $cas_concrets = $row['cas_concrets'];
    $remarques = $row['remarques'];
    $telephone = $row['telephone'];
    $email = $row['email'];
} else {
    echo "Aucune donnée trouvée.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aperçu des données</title>
    <style>
        /* Ajoutez votre CSS pour le style de l'aperçu ici */
    </style>
</head>
<body>
    <h1>Aperçu des données saisies</h1>
    <h2>Informations personnelles</h2>
    <p>Formation : <?= $formation; ?></p>
    <p>Nom : <?= $nom; ?></p>
    <p>Entité : <?= $entite; ?></p>
    <p>Missions : <?= $missions; ?></p>

    <!-- Ajoutez le reste des champs du formulaire ici -->
    <h2>Formation précédente</h2>
    <p>Formation précédente : <?= $formation_precedente; ?></p>
    <p>Détails de la formation précédente : <?= $formation_details; ?></p>

    <h2>Demande personnelle</h2>
    <p>Demande personnelle : <?= $demande_personnelle; ?></p>

    <h2>Difficultés rencontrées</h2>
    <p>Difficultés rencontrées : <?= $difficultes; ?></p>

    <h2>Conseil à donner</h2>
    <p>Conseil : <?= $conseil; ?></p>

    <h2>Objectifs de la formation</h2>
    <p>Objectifs : <?= $objectifs; ?></p>

    <h2>Attentes de la formation</h2>
    <p>Attentes : <?= $attentes; ?></p>

    <h2>Autres priorités</h2>
    <p>Autres priorités : <?= $autres_priorites; ?></p>

    <h2>Objectifs spécifiques</h2>
    <p>Objectif 1 : <?= $objectif1; ?></p>
    <p>Objectif 2 : <?= $objectif2; ?></p>
    <p>Objectif 3 : <?= $objectif3; ?></p>

    <h2>Cas concrets</h2>
    <p>Cas concrets : <?= $cas_concrets; ?></p>

    <h2>Remarques supplémentaires</h2>
    <p>Remarques : <?= $remarques; ?></p>

    <h2>Coordonnées</h2>
    <p>Téléphone : <?= $telephone; ?></p>
    <p>Email : <?= $email; ?></p>

    <!-- Formulaire pour envoyer les données dans la base de données -->
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <button type="submit">Enregistrer dans la base de données</button>
        <button type="submit" name='rejet'>Annuler</button>
    </form>
</body>
</html>
<?php 
// Connexion à la base de données
$servername = "localhost";
$username = "nova";
$password = "cnov @";
$dbname = "essai";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

if (isset($_POST['rejet']) && isset($_POST['id'])){
    echo $_POST['id'];
    $sql = "DELETE FROM nom_table WHERE id = " . $_POST['id'];
    $conn->query($sql);
    header('Location: ../');
}

?>