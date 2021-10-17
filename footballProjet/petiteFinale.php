<?php
session_start();
include 'source/organisateurN2.php';

if (isset($_POST['submit15']) && $_SESSION['match15'][0]) {
    organisateurN2('PFinale',15,'submit15');
}

if (isset($_POST['submitplg15']) && $_SESSION['PFinale']['match15']['prolongation']['etat'][0]) {
    organisateurN2('PFinale', 15, 'submitplg15');
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
        <a href="demiFinale.php">demie Finale</a>
        <div class="logo">
            <img src="./assets/image/Cup2.png" alt="">
            <p>coupe 3 <sup>e</sup> INFO</p>
        </div>
        <a href="" id="suivant">suivant</a>
    </nav>

    <h1>Petite finale</h1>
    <center>
        <div class="tab" id="tab1">

            <div class="ligne">
                <table class="agbr">
                    <tr>
                        <td><?= $_SESSION['PFinale']['match15']['equipe1']['nom'] ?></td>
                        <td><?= $_SESSION['PFinale']['match15']['equipe1']['drapeau'] ?></td>
                    </tr>
                </table>
                <div class="score">
                        <div id="btn">
                            <?php 
                            if ($_SESSION["match15"][1] == false) { ?>
                                 <form action="" method="post">
                                    <input type="number" min="0" max="10"  name="scr1M15" <?php if ($_SESSION['match15'][0] == false) { ?> disabled="disabled " class="score" <?php  } ?>> -
                                    <input type="number" min="0" max="10"  name="scr2M15" <?php if ($_SESSION['match15'][0] == false) { ?> disabled="disabled " class="score" <?php  } ?>> 
                                    <div class="submit">
                                 <input type="submit" name="submit15" <?php if ($_SESSION['match15'][0] == false) { ?> disabled="disabled" class="score" <?php  } ?>>
                                 </div>
                                </form>
                          <?php  } else {
                                echo  $_SESSION['PFinale']['match15']['equipe1']['score'] . " - " . $_SESSION['PFinale']['match15']['equipe2']['score'];
                            }
                            ?>
                        </div>
                </div>
                <table class="agbr">
                    <tr>
                        <td><?= $_SESSION['PFinale']['match15']['equipe2']['drapeau'] ?></td>
                        <td><?= $_SESSION['PFinale']['match15']['equipe2']['nom'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
           <!-- =========================== match1-prolongation ===================================== -->
           <div  <?php if ($_SESSION['PFinale']['match15']['tour'] == 0) { ?> class="prlgBox1None" <?php }
                  if ($_SESSION['PFinale']['match15']['prolongation']['etat'][0]) { ?> class="Box" <?php } ?>>
                <h3 class="prolongation">PROLONGATION</h3>
                <div class="ligne" title="prologation Match13">
                    <table class="agbr">
                        <tr>
                        <td><?= $_SESSION['PFinale']['match15']['equipe1']['nom'] ?></td>
                        <td><?= $_SESSION['PFinale']['match15']['equipe1']['drapeau'] ?></td>
                        </tr>
                    </table>
                    <div class="score">
                            <div id="btn">
                                <?php
                                if ($_SESSION['PFinale']['match15']['prolongation']['etat'][0]) { ?>
                                     <form action="" method="post">
                                    <input type="number" min="0" max="10"  name="scr1M15" <?php if ($_SESSION['PFinale']['match15']['prolongation']['etat'][0]== false) { ?> disabled="disabled " class="score" <?php  } ?>> -
                                    <input type="number" min="0" max="10"  name="scr2M15" <?php if ($_SESSION['PFinale']['match15']['prolongation']['etat'][0]== false) { ?> disabled="disabled " class="score" <?php  } ?>> 
                                    <div class="submit">
                                 <input type="submit" name="submitplg15" <?php if ($_SESSION['PFinale']['match15']['prolongation']['etat'][0] == false) { ?> disabled="disabled" <?php  } ?>>
                                 </div>
                                    </form>
                              <?php  } else {
                                    echo  $_SESSION['PFinale']['match15']['prolongation']['scoreEquipe1'] . " - " . $_SESSION['PFinale']['match15']['prolongation']['scoreEquipe2'];
                                }
                                ?>
                            </div>
                    </div>
                    <table class="agbr">
                        <tr>
                        <td><?= $_SESSION['PFinale']['match15']['equipe2']['drapeau'] ?></td>
                        <td><?= $_SESSION['PFinale']['match15']['equipe2']['nom'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- =========================== statistic1 ===================================== -->
            <!-- seulement au cas de penalite ou prolongation-->
            <div  <?php if ($_SESSION['PFinale']['match15']['statistic'] == false) { ?> class="statisticNone" <?php } if ($_SESSION['PFinale']['match15']['prolongation']['etat'][1]){  ?>  class="Box" <?php  } ?>>
            <div class="statistic">
                <table class="statTable">
                    <tr>
                        <th> Score</th>
                        <th>Match</th>
                        <th>Score</th>
                    </tr>
                    <tr class="td1">
                        <td><?= $_SESSION['PFinale']['match15']['equipe1']['score'] ?></td>
                        <td>90''</td>
                        <td><?= $_SESSION['PFinale']['match15']['equipe2']['score'] ?></td>
                    </tr>
                    <?php if ($_SESSION['PFinale']['match15']['tour'] > 0) { ?>
                        <tr class="td2">
                            <td>(<?= $_SESSION['PFinale']['match15']['prolongation']['scoreEquipe1'] ?>)</td>
                            <td>prolongation</td>
                            <td>(<?= $_SESSION['PFinale']['match15']['prolongation']['scoreEquipe2'] ?>)</td>
                        </tr>
                        <tr class="td3">
                            <td><?= ($_SESSION['PFinale']['match15']['prolongation']['scoreEquipe1'] + $_SESSION['PFinale']['match15']['equipe1']['score']) ?></td>
                            <td>120''</td>
                            <td><?= ($_SESSION['PFinale']['match15']['prolongation']['scoreEquipe2'] + $_SESSION['PFinale']['match15']['equipe2']['score']) ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <p> Felicitation à <?= $_SESSION['PFinale']['match15']['champion']['nom'] ?> qui termine 3<sup>e</sup> du tournoi coupe 3<sup>e</sup> info dans les
                    <?php
                    if ($_SESSION['PFinale']['match15']['tour'] == 0) {
                        echo "  90\" de jeu ";
                    }  if ($_SESSION['PFinale']['match15']['tour'] == 1) {
                        echo " 120\" de jeu ";
                    } ?>
                    <?php if ($_SESSION['PFinale']['match15']['tour'] == 2) {
                        echo " seances de tir au but ";
                    } ?>
                </p>
                <p>Felicitation à <?=$_SESSION['PFinale']['match15']['2eplace']['nom']?> qui termine 4<sup>e</sup> du tournoi coupe 3<sup>e</sup> info </p>
            </div>
            </div>
    </center>
    <?php
    if ($_SESSION['match15'][0] == false) { ?>
        <script>
            document.querySelector('#suivant').href = "./grandeFinale.php";
            document.querySelector('#suivant').style.opacity = "1";
        </script>
    <?php } ?>
</body>

</html>