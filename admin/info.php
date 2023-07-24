<?php 


$conn = mysqli_connect("localhost", "terry", "0156", "formulaire");
// Vérifier la connexion
if (!$conn) {
    die("Erreur de connexion à la base de données: " . mysqli_connect_error());
}

$val = $_GET['q'];

if (!isset($_GET["table"])) {
    return false;
}

if ($_GET['table'] == "formulaire") {
    $sql = "SELECT * FROM nom_table WHERE formation LIKE '%$val%' OR nom LIKE '%$val%' OR entite LIKE '%$val%' OR missions LIKE '%$val%'";
} else if ($_GET['table'] == "newsletters"){
    $sql = "SELECT * FROM newsletters WHERE nom LIKE '%$val%' OR prenom LIKE '%$val%' OR email LIKE '%$val%' OR phone LIKE '%$val%'";
}


$req = mysqli_query($conn, $sql);

$data = '{"data": [';

$nbr = 0;
if (mysqli_num_rows($req) > 0) {
while ($row = mysqli_fetch_assoc($req)) {
    $nbr += 1;
    if ($_GET['table'] == "formulaire") {
        if (mysqli_num_rows($req) == $nbr){
            $data .= '{"id": "'.$row["id"].'", "nom": "'.$row["nom"].'", "entite": "'.$row["entite"].'", "formation": "'.$row["formation"].'"}';
        } else {
            $data .= '{"id": "'.$row["id"].'", "nom": "'.$row["nom"].'", "entite": "'.$row["entite"].'", "formation": "'.$row["formation"].'"},';
        }
    } else if ($_GET['table'] == "newsletters"){
            if ($row['confirmed']){
                $color = "success";
            } else{
                $color = "danger";
            }
        if (mysqli_num_rows($req) == $nbr){
            $data .= '{"id": "'.$row["id"].'", "nom": "'.$row["nom"].'", "prenom": "'.$row["prenom"].'", "phone": "'.$row["phone"].'", "email": "'.$row["email"].'", "confirmed": "'. $color .'"}';
        } else {
            $data .= '{"id": "'.$row["id"].'", "nom": "'.$row["nom"].'", "prenom": "'.$row["prenom"].'", "phone": "'.$row["phone"].'", "email": "'.$row["email"].'", "confirmed": "'. $color .'"},';
        }
    }
    
}
$data .= ']}';
} else {
    $data = '{"empty": "AUCUNE DONNÉES DISPONIBLE"}';
}


echo $data;
