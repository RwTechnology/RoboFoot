<?php
session_start();
include 'gestionClassement/groupeA.php';
include 'gestionClassement/groupeB.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/image/Cup2.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/classement.css">
    <link rel="stylesheet" href="./css/link.css">
    <title>RobotFoot</title>
</head>

<body>

    <nav class="boxLink">
        <a href="terrainDeJeu.php">espace de jeu</a>
        <div class="logo">
            <img src="./assets/image/Cup2.png" alt="">
            <p>coupe 3 <sup>e</sup> INFO</p>
        </div>
        <a href="" id="suivant">suivant</a>
    </nav>

    <div class="classement">
        <div id="contenu">
            <div class="classement1">
                <h1>Table de position groupe A</h1>
                <table>
                    <tr>
                        <th colspan="2">Pays</th>
                        <th>MJ</th>
                        <th>MG</th>
                        <th>MN</th>
                        <th>MP</th>
                        <th>BP</th>
                        <th>BC</th>
                        <th>Dif</th>
                        <th>Point</th>
                    </tr>
                    <!-- cette fonction gere ni l'affichage ni l'arrangement de chaque equipe a leur position en fonction de son nombre de points  -->
                    <?php positionnerGroupeA(); ?>
                </table>
            </div>
        </div>
        <div id="contenu">
            <div class="classement2">
                <h1>Table de position groupe B</h1>
                <table>
                    <tr>
                        <th colspan="2">Pays</th>
                        <th>MJ</th>
                        <th>MG</th>
                        <th>MN</th>
                        <th>MP</th>
                        <th>BP</th>
                        <th>BC</th>
                        <th>Dif</th>
                        <th>Point</th>
                    </tr>
                               <!-- cette fonction gere ni l'affichage ni l'arrangement de chaque equipe a leur position en fonction de son nombre de points  -->
                    <?php positionnerGroupeB(); ?>
                </table>
            </div>
        </div>
    </div>

    <?php
    if (
        $_SESSION['equipe1GroupeA']["matchJoue"] == 3
        && $_SESSION['equipe2GroupeA']["matchJoue"] == 3
        && $_SESSION['equipe3GroupeA']["matchJoue"] == 3
        && $_SESSION['equipe3GroupeA']["matchJoue"] == 3
        && $_SESSION['equipe1GroupeB']["matchJoue"] == 3
        && $_SESSION['equipe2GroupeB']["matchJoue"] == 3
        && $_SESSION['equipe3GroupeB']["matchJoue"] == 3
        && $_SESSION['equipe4GroupeB']["matchJoue"] == 3
    ) { ?>
        <script>
            document.querySelector('#suivant').href = "./demiFinale.php";
            document.querySelector('#suivant').style.opacity = "1";
        </script>
    <?php } ?>

</body>

</html>