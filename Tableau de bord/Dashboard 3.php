<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Les balises meta, liens vers les styles et les scripts -->
</head>

<body class="animsition" style="animation-duration: 900ms; opacity: 1;">
    <div class="dashboard-container">
        <h1>Tableau de bord</h1>
        <table>
            <thead>
                <tr>
                    <th>Intitulé de la formation</th>
                    <th>Nom et Prénoms</th>
                    <th>Entité/Direction/Service</th>
                    <th>Missions et activités</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Établir une connexion à la base de données
                $conn = mysqli_connect("localhost", "root", "", "formulaire");

                // Vérifier la connexion
                if (!$conn) {
                    die("Erreur de connexion à la base de données: " . mysqli_connect_error());
                }

                // Récupérer les informations de base de données
                $query = "SELECT formation, nom, entite, missions FROM nom_table";
                $result = mysqli_query($conn, $query);

                // Vérifier si des résultats ont été trouvés
                if (mysqli_num_rows($result) > 0) {
                    // Afficher les données dans le tableau de bord
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>' . utf8_encode($row['formation']) . '</td>';
                        echo '<td>' . utf8_encode($row['nom']) . '</td>';
                        echo '<td>' . utf8_encode($row['entite']) . '</td>';
                        echo '<td>' . utf8_encode($row['missions']) . '</td>';
                        echo '<td>';
                        echo '<button onclick="voirDetails(\'' . utf8_encode($row['formation']) . '\', \'' . utf8_encode($row['nom']) . '\', \'' . utf8_encode($row['entite']) . '\', \'' . utf8_encode($row['missions']) . '\')">Voir</button>';
                        echo '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="5">Aucune donnée disponible</td></tr>';
                }

                // Fermer la connexion à la base de données
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>

    <div id="details-container" style="display: none;">
        <h2>Détails du formulaire</h2>
        <div id="details-content"></div>
        <button onclick="telecharger()">Télécharger</button>
    </div>

    <script>
        function voirDetails(formation, nom, entite, missions) {
            var detailsContent = document.getElementById('details-content');
            detailsContent.innerHTML = '';
            detailsContent.innerHTML += '<p><strong>Intitulé de la formation:</strong> ' + formation + '</p>';
            detailsContent.innerHTML += '<p><strong>Nom et Prénoms:</strong> ' + nom + '</p>';
            detailsContent.innerHTML += '<p><strong>Entité/Direction/Service:</strong> ' + entite + '</p>';
            detailsContent.innerHTML += '<p><strong>Missions et activités:</strong> ' + missions + '</p>';

            var detailsContainer = document.getElementById('details-container');
            detailsContainer.style.display = 'block';
        }

        function telecharger() {
            // Logique de téléchargement du document complet
            alert('Téléchargement en cours...');
        }
    </script>
</body>
</html>
