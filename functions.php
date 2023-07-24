<?php

function valid_data($data)
{
    $data = trim($data);
    $data = addslashes($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if (isset($_POST['data_from_formulaire']))
{  
    $data_from_formulaire = $_POST['data_from_formulaire'];


        $conn = mysqli_connect("localhost", "root", "", "formulaire");
  
        //On insère les données reçues
        $sql = "INSERT INTO `nom_table` (`formation`, `nom`, `entite`, `missions`, `formation_precedente`, `formation_details`, `demande_personnelle`, `difficultes`, `conseil`, `objectifs`, `attentes`, `autres_priorites`, `objectifs1`, `objectifs2`, `objectifs3`, `cas_concrets`, `remarques`, `telephone`, `email`) VALUES ('$data_from_formulaire[0]', '$data_from_formulaire[1]', '$data_from_formulaire[2]', '$data_from_formulaire[3]', '$data_from_formulaire[4]', '$data_from_formulaire[5]', '$data_from_formulaire[6]', '$data_from_formulaire[7]', '$data_from_formulaire[8]', '$data_from_formulaire[9]', '$data_from_formulaire[10]', '$data_from_formulaire[11]', '$data_from_formulaire[12]', '$data_from_formulaire[13]', '$data_from_formulaire[14]', '$data_from_formulaire[15]', '$data_from_formulaire[16]', '$data_from_formulaire[17]', '$data_from_formulaire[18]')";
        mysqli_query($conn,$sql);

        $msg = "Donnees enregistrees avec success";

    // Send the data to personal interested


        
}