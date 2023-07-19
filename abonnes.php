                       <?php
if (isset($_POST['next'])) {
  // Connexion à la base de données
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "formulaire";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Vérifier la connexion
  if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
  }

  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $telephone = $_POST['telephone'];
  $email = $_POST['email'];
  

  // Requête SQL pour insérer les données dans la table
  $sql = "INSERT INTO letters (nom, prenom, email, telephone)";


  $conn->query($sql);
  $conn->close();
}
  ?>