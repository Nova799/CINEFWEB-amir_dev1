<?php 


$conn = mysqli_connect("localhost", "root", "", "formulaire");
// Vérifier la connexion
if (!$conn) {
    die("Erreur de connexion à la base de données: " . mysqli_connect_error());
}

$val = $_GET['q'];

$sql = "SELECT * FROM nom_table WHERE formation LIKE '%$val%' OR nom LIKE '%$val%' OR entite LIKE '%$val%' OR missions LIKE '%$val%'";

$req = mysqli_query($conn, $sql);

$data = '{"data": [';

$nbr = 0;
if (mysqli_num_rows($req) > 0) {
while ($row = mysqli_fetch_assoc($req)) {
    $nbr += 1;
    if (mysqli_num_rows($req) == $nbr){
        $data .= '{"id": "'.$row["id"].'", "nom": "'.$row["nom"].'", "entite": "'.$row["entite"].'", "formation": "'.$row["formation"].'"}';
    } else {
        $data .= '{"id": "'.$row["id"].'", "nom": "'.$row["nom"].'", "entite": "'.$row["entite"].'", "formation": "'.$row["formation"].'"},';
    }
}
$data .= ']}';
} else {
    $data = '{"empty": "AUCUNE DONNÉES DISPONIBLE"}';
}


echo $data;
