<?php
session_start();
include 'source/organisateurN2.php';

if (isset($_POST['submit16']) && $_SESSION['match16'][0] ) {
    organisateurN2('GFinale',16,'submit16');
}
if (isset($_POST['submitplg16']) && $_SESSION['GFinale']['match16']['prolongation']['etat'][0] ) {
    organisateurN2('GFinale',16,'submitplg16');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/image/Cup2.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/terrain.css">
    <link rel="stylesheet" href="./css/link.css">
    <title>RobotFoot</title>
</head>

<body>

    <nav class="boxLink">
    <a href="petiteFinale.php">petite finale</a>
        <div class="logo">
            <img src="./assets/image/Cup2.png" alt="">
            <p>coupe 3 <sup>e</sup> INFO</p>
        </div>
        <a href="" id="suivant">suivant</a>
    </nav>
    
    <h1> Grande finale</h1>
    <center>
        <div class="tab" id="tab1">
               
                <div class="ligne">
                    <table class="agbr">
                        <tr>
                            <td><?=$_SESSION['GFinale']['match16']['equipe1']['nom']?></td>
                            <td><?=$_SESSION['GFinale']['match16']['equipe1']['drapeau']?></td>
                        </tr>
                    </table>
                    <div class="score">
                    <form action="" method="post">
                        <button type="submit" title="click here" name="submit16" <?php if ($_SESSION['match16'][0] == false) { ?> disabled="disabled" class="score" <?php  } ?>>
                            <?php 
                            if ($_SESSION["match16"][1] == false) {
                                echo "JOUER";
                            } else {
                                echo  $_SESSION['GFinale']['match16']['equipe1']['score'] . " - " . $_SESSION['GFinale']['match16']['equipe2']['score'];
                            }
                            ?>
                        </button>
                    </form>
                    </div>
                    <table class="agbr">
                        <tr>
                        <td><?=$_SESSION['GFinale']['match16']['equipe2']['nom']?></td>
                            <td><?=$_SESSION['GFinale']['match16']['equipe2']['drapeau']?></td>
                        </tr>
                    </table>
                </div>
          </div>
  <!-- =========================== match1-prolongation ===================================== -->
  <div  <?php if ($_SESSION['GFinale']['match16']['tour'] == 0) { ?> class="prlgBox1None" <?php }
                  if ($_SESSION['GFinale']['match16']['prolongation']['etat'][0]) { ?> class="Box" <?php } ?>>
                <h3 class="prolongation">PROLONGATION</h3>
                <div class="ligne" title="prologation Match16">
                    <table class="agbr">
                        <tr>
                        <td><?= $_SESSION['GFinale']['match16']['equipe1']['nom'] ?></td>
                        <td><?= $_SESSION['GFinale']['match16']['equipe1']['drapeau'] ?></td>
                        </tr>
                    </table>
                    <div class="score">
                        <form action="" method="post">
                            <button type="submit" title="click here" name="submitplg16" <?php if ($_SESSION['GFinale']['match16']['prolongation']['etat'][0] == false) { ?> disabled="disabled" class="score" <?php  } ?>>
                                <?php
                                if ($_SESSION['GFinale']['match16']['prolongation']['etat'][0]) {
                                    echo "JOUER";
                                } else {
                                    echo  $_SESSION['GFinale']['match16']['prolongation']['scoreEquipe1'] . " - " . $_SESSION['GFinale']['match16']['prolongation']['scoreEquipe2'];
                                }
                                ?>
                            </button>
                        </form>
                    </div>
                    <table class="agbr">
                        <tr>
                        <td><?= $_SESSION['GFinale']['match16']['equipe2']['drapeau'] ?></td>
                        <td><?= $_SESSION['GFinale']['match16']['equipe2']['nom'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- =========================== statistic1 ===================================== -->
            <!-- seulement au cas de penalite ou prolongation-->
            <div  <?php if ($_SESSION['GFinale']['match16']['statistic'] == false) { ?> class="statisticNone" <?php } if ($_SESSION['GFinale']['match16']['prolongation']['etat'][1]){  ?>  class="Box" <?php  } ?>>
            <div class="statistic">
                <table class="statTable">
                    <tr>
                        <th> Score</th>
                        <th>Match</th>
                        <th>Score</th>
                    </tr>
                    <tr class="td1">
                        <td><?= $_SESSION['GFinale']['match16']['equipe1']['score'] ?></td>
                        <td>90''</td>
                        <td><?= $_SESSION['GFinale']['match16']['equipe2']['score'] ?></td>
                    </tr>
                    <?php if ($_SESSION['GFinale']['match16']['tour'] > 0) { ?>
                        <tr class="td2">
                            <td>(<?= $_SESSION['GFinale']['match16']['prolongation']['scoreEquipe1'] ?>)</td>
                            <td>prolongation</td>
                            <td>(<?= $_SESSION['GFinale']['match16']['prolongation']['scoreEquipe2'] ?>)</td>
                        </tr>
                        <tr class="td3">
                            <td><?= ($_SESSION['GFinale']['match16']['prolongation']['scoreEquipe1'] + $_SESSION['PFinale']['match15']['equipe1']['score']) ?></td>
                            <td>120''</td>
                            <td><?= ($_SESSION['GFinale']['match16']['prolongation']['scoreEquipe2'] + $_SESSION['PFinale']['match15']['equipe2']['score']) ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <p> Felicitations à <?= $_SESSION['GFinale']['match16']['champion']['nom'] ?> qui remporte le tournoi coupe 3<sup>e</sup> info dans les
                    <?php
                    if ($_SESSION['GFinale']['match16']['tour'] == 0) {
                        echo "  90\" de jeu ";
                    }  if ($_SESSION['GFinale']['match16']['tour'] == 1) {
                        echo " 120\" de jeu ";
                    } ?>
                    <?php if ($_SESSION['GFinale']['match16']['tour'] == 2) {
                        echo " seances de tir au but ";
                    } ?>
                </p>
                <p>Felicitations à  <?= $_SESSION['GFinale']['match16']['2eplace']['nom']?> qui termine 2<sup>e</sup> du tournoi coupe 3<sup>e</sup> info </p> </p>
            </div>
            </div>
        </center>
        <?php
    if ($_SESSION['match16'][0] == false) { ?>
        <script>
            document.querySelector('#suivant').href = "./statistic.php";
            document.querySelector('#suivant').style.opacity = "1";
        </script>
    <?php } ?>
</body>

</html>