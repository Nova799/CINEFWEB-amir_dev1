<?php
// Connexion à la base de données
function conn(){
    return mysqli_connect("localhost", "root", "", "formulaire");
};

$host = "localhost";
$userName = "root";
$password = "";
$dbName = "formulaire";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

?>