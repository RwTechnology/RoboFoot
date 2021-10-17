<?php
session_start();
include 'source/organisateurN2.php';
// validation match jouer
if (isset($_POST['submit13']) && $_SESSION['match13'][0]) {
    organisateurN2('dFInfo', 13, 'submit13');
}

if (isset($_POST['submitplg13']) && $_SESSION['dFInfo']['match13']['prolongation']['etat'][0] && $_SESSION['match13'][0]==false) {
    organisateurN2('dFInfo', 13, 'submitplg13');
}

if (isset($_POST['submit14'])) {
    organisateurN2('dFInfo', 14, 'submit14');
}

if (isset($_POST['submitplg14']) && $_SESSION['dFInfo']['match14']['prolongation']['etat'][0]) {
    organisateurN2('dFInfo', 14, 'submitplg14');
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
        <a href="classement.php">Classement</a>
        <div class="logo">
            <img src="./assets/image/Cup2.png" alt="">
            <p>coupe 3 <sup>e</sup> INFO</p>
        </div>
        <a href="" id="suivant">suivant</a>
    </nav>

    <h1>Phase demi-finale</h1>
    <center>
        <div class="tab" id="tab1">

            <!-- =========================== match1 ========================================== -->

            <div class="ligne" title="Match13" id="Niveau2">
                <table class="agbr">
                    <tr>
                        <td><?= $_SESSION['dFInfo']['match13']['equipe1']['nom'] ?></td>
                        <td><?= $_SESSION['dFInfo']['match13']['equipe1']['drapeau'] ?></td>
                    </tr>
                </table>
                <div class="score">
                        <div id="btn">
                            <?php
                            if ($_SESSION["match13"][1] == false) { ?>
                                    <form action="" method="post">
                                    <input type="number" min="0" max="10"  name="scr1M13" <?php if ($_SESSION['match13'][0] == false) { ?> disabled="disabled " class="score" <?php  } ?>> -
                                    <input type="number" min="0" max="10"  name="scr2M13" <?php if ($_SESSION['match13'][0] == false) { ?> disabled="disabled " class="score" <?php  } ?>> 
                                    <div class="submit">
                                 <input type="submit" name="submit13" <?php if ($_SESSION['match13'][0] == false) { ?> disabled="disabled" class="score" <?php  } ?>>
                                 </div>
                                    </form>
                         <?php   } else {
                                echo  $_SESSION['dFInfo']['match13']['equipe1']['score'] . " - " . $_SESSION['dFInfo']['match13']['equipe2']['score'];
                            }
                            ?>
                        </div>
                </div>
                <table class="agbr">
                    <tr>
                        <td><?= $_SESSION['dFInfo']['match13']['equipe2']['drapeau'] ?></td>
                        <td><?= $_SESSION['dFInfo']['match13']['equipe2']['nom'] ?></td>
                    </tr>
                </table>
            </div>

            <!-- =========================== match1-prolongation ===================================== -->
            <div  style="margin-bottom: 0;" <?php if ($_SESSION['dFInfo']['match13']['tour'] == 0) { ?> class="prlgBox1None" <?php }
                  if ($_SESSION['dFInfo']['match13']['prolongation']['etat'][0]) { ?> class="Box" <?php } ?>>
                <h3 class="prolongation">PROLONGATION</h3>
                <div class="ligne" title="prologation Match13">
                    <table class="agbr">
                        <tr>
                            <td><?= $_SESSION['dFInfo']['match13']['equipe1']['nom'] ?></td>
                            <td><?= $_SESSION['dFInfo']['match13']['equipe1']['drapeau'] ?></td>
                        </tr>
                    </table>
                    <div class="score">
                    
                            <div id="btn">
                                <?php
                                if ($_SESSION['dFInfo']['match13']['prolongation']['etat'][0]) {?>
                                <form action="" method="post">
                                    <input type="number" min="0" max="10"  name="scr1M13" <?php if ($_SESSION['dFInfo']['match13']['prolongation']['etat'][0]== false) { ?> disabled="disabled " class="score" <?php  } ?>> -
                                    <input type="number" min="0" max="10"  name="scr2M13" <?php if ($_SESSION['dFInfo']['match13']['prolongation']['etat'][0]== false) { ?> disabled="disabled " class="score" <?php  } ?>> 
                                    <div class="submit">
                                 <input type="submit" name="submitplg13" <?php if ($_SESSION['dFInfo']['match13']['prolongation']['etat'][0] == false) { ?> disabled="disabled" <?php  } ?>>
                                 </div>
                                    </form>
                           <?php } else {
                                    echo  $_SESSION['dFInfo']['match13']['prolongation']['scoreEquipe1'] . " - " . $_SESSION['dFInfo']['match13']['prolongation']['scoreEquipe2'];
                                }
                                ?>
                            </div>
                    </div>
                    <table class="agbr">
                        <tr>
                            <td><?= $_SESSION['dFInfo']['match13']['equipe2']['drapeau'] ?></td>
                            <td><?= $_SESSION['dFInfo']['match13']['equipe2']['nom'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- =========================== statistic1 ===================================== -->
            <!-- seulement au cas de penalite ou prolongation-->
            <div  <?php if ($_SESSION['dFInfo']['match13']['statistic'] == false) { ?> class="statisticNone" <?php } if ($_SESSION['dFInfo']['match13']['prolongation']['etat'][1]){  ?>  class="Box" <?php  } ?>>
            <div class="statistic">
                <table class="statTable">
                    <tr>
                        <th> Score</th>
                        <th>Match</th>
                        <th>Score</th>
                    </tr>
                    <tr class="td1">
                        <td><?= $_SESSION['dFInfo']['match13']['equipe1']['score'] ?></td>
                        <td>90''</td>
                        <td><?= $_SESSION['dFInfo']['match13']['equipe2']['score'] ?></td>
                    </tr>
                    <?php if ($_SESSION['dFInfo']['match13']['tour'] > 0) { ?>
                        <tr class="td2">
                            <td>(<?= $_SESSION['dFInfo']['match13']['prolongation']['scoreEquipe1'] ?>)</td>
                            <td>prolongation</td>
                            <td>(<?= $_SESSION['dFInfo']['match13']['prolongation']['scoreEquipe2'] ?>)</td>
                        </tr>
                        <tr class="td3">
                            <td><?= ($_SESSION['dFInfo']['match13']['prolongation']['scoreEquipe1'] + $_SESSION['dFInfo']['match13']['equipe1']['score']) ?></td>
                            <td>120''</td>
                            <td><?= ($_SESSION['dFInfo']['match13']['prolongation']['scoreEquipe2'] + $_SESSION['dFInfo']['match13']['equipe2']['score']) ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <p> Felicitation, <?= $_SESSION['GFinale']['match16']['equipe1']['nom'] ?> est qualifié pour la grande finale dans les
                    <?php
                    if ($_SESSION['dFInfo']['match13']['tour'] == 0) {
                        echo "  90\" de jeu ";
                    }  if ($_SESSION['dFInfo']['match13']['tour'] == 1) {
                        echo " 120\" de jeu ";
                    } ?>
                    <?php if ($_SESSION['dFInfo']['match13']['tour'] == 2) {
                        echo " seances de tir au but ";
                    } ?>
                </p>
                <p><?= $_SESSION['PFinale']['match15']['equipe1']['nom'] ?> est qualifié pour la petifte finale </p>
            </div>
            </div>

            <!-- ========================== match2 ====================================== -->

            <div class="ligne" title="Match14" id="Niveau2">
                <table class="agbr">
                    <tr>
                        <td><?= $_SESSION['dFInfo']['match14']['equipe1']['nom'] ?></td>
                        <td><?= $_SESSION['dFInfo']['match14']['equipe1']['drapeau'] ?></td>
                    </tr>
                </table>
                <div class="score">
                        <div id="btn">
                            <?php if ($_SESSION["match14"][1] == false) { ?>
                                <form action="" method="post">
                                    <input type="number" min="0" max="10"  name="scr1M14" <?php if ($_SESSION['match14'][0] == false) { ?> disabled="disabled "<?php  } ?>> -
                                    <input type="number" min="0" max="10"  name="scr2M14" <?php if ($_SESSION['match14'][0] == false) { ?> disabled="disabled " <?php  } ?>> 
                                    <div class="submit">
                                 <input type="submit" name="submit14" <?php if ($_SESSION['match14'][0] == false) { ?> disabled="disabled" class="score" <?php  } ?>>
                                 </div>
                                    </form>
                            <?php  } else {
                                echo  $_SESSION['dFInfo']['match14']['equipe1']['score'] . " - " . $_SESSION['dFInfo']['match14']['equipe2']['score'];
                            }
                            ?>
                        </div>
                </div>
                <table class="agbr">
                    <tr>
                        <td><?= $_SESSION['dFInfo']['match14']['equipe2']['drapeau'] ?></td>
                        <td><?= $_SESSION['dFInfo']['match14']['equipe2']['nom'] ?></td>
                    </tr>
                </table>
            </div>
            <!-- =========================== match2-prolongation ===================================== -->
            <div  <?php if ($_SESSION['dFInfo']['match14']['tour'] == 0) { ?> class="prlgBox1None" <?php }
                  if ($_SESSION['dFInfo']['match14']['prolongation']['etat'][0]) { ?> class="Box" <?php } ?>>
                <h3 class="prolongation">PROLONGATION</h3>
                <div class="ligne" title="prologation Match14">
                    <table class="agbr">
                        <tr>
                        <tr>
                            <td><?= $_SESSION['dFInfo']['match14']['equipe1']['nom'] ?></td>
                            <td><?= $_SESSION['dFInfo']['match14']['equipe1']['drapeau'] ?></td>
                        </tr>
                    </table>
                    <div class="score">
                        <form action="" method="post">
                            <div id="btn">
                                <?php
                                if ($_SESSION['dFInfo']['match14']['prolongation']['etat'][0]) { ?>
                                   <form action="" method="post">
                                    <input type="number" min="0" max="10"  name="scr1M14" <?php if ($_SESSION['dFInfo']['match14']['prolongation']['etat'][0]== false) { ?> disabled="disabled " class="score" <?php  } ?>> -
                                    <input type="number" min="0" max="10"  name="scr2M14" <?php if ($_SESSION['dFInfo']['match14']['prolongation']['etat'][0]== false) { ?> disabled="disabled " class="score" <?php  } ?>> 
                                    <div class="submit">
                                 <input type="submit" name="submitplg14" <?php if ($_SESSION['dFInfo']['match14']['prolongation']['etat'][0] == false) { ?> disabled="disabled" <?php  } ?>>
                                 </div>
                                    </form>
                              <?php  } else {
                                    echo  $_SESSION['dFInfo']['match14']['prolongation']['scoreEquipe1'] . " - " . $_SESSION['dFInfo']['match14']['prolongation']['scoreEquipe2'];
                                }
                                ?>
                            </div>
                    </div>
                    <table class="agbr">
                        <tr>
                            <td><?= $_SESSION['dFInfo']['match14']['equipe2']['drapeau'] ?></td>
                            <td><?= $_SESSION['dFInfo']['match14']['equipe2']['nom'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- =========================== statistic2 ===================================== -->
            <!-- seulement au cas de penalite ou prolongation-->
            <div  <?php if ($_SESSION['dFInfo']['match14']['statistic'] == false) { ?> class="statisticNone" <?php } if ($_SESSION['dFInfo']['match14']['prolongation']['etat'][1]){  ?>  class="Box" <?php  } ?>>
            <div class="statistic">
                <table class="statTable">
                    <tr>
                        <th> Score</th>
                        <th>Match</th>
                        <th>Score</th>
                    </tr>
                    <tr class="td1">
                        <td><?= $_SESSION['dFInfo']['match14']['equipe1']['score'] ?></td>
                        <td>90''</td>
                        <td><?= $_SESSION['dFInfo']['match14']['equipe2']['score'] ?></td>
                    </tr>
                    <?php if ($_SESSION['dFInfo']['match14']['tour'] > 0) { ?>
                        <tr class="td2">
                            <td>(<?= $_SESSION['dFInfo']['match14']['prolongation']['scoreEquipe1'] ?>)</td>
                            <td>prolongation</td>
                            <td>(<?= $_SESSION['dFInfo']['match14']['prolongation']['scoreEquipe2'] ?>)</td>
                        </tr>
                        <tr class="td3">
                            <td><?= ($_SESSION['dFInfo']['match14']['prolongation']['scoreEquipe1'] + $_SESSION['dFInfo']['match13']['equipe1']['score']) ?></td>
                            <td>120''</td>
                            <td><?= ($_SESSION['dFInfo']['match14']['prolongation']['scoreEquipe2'] + $_SESSION['dFInfo']['match13']['equipe2']['score']) ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <p> Felicitation, <?= $_SESSION['GFinale']['match16']['equipe2']['nom'] ?> est qualifié pour la grande finale dans les
                    <?php
                    if ($_SESSION['dFInfo']['match14']['tour'] == 0) {
                        echo "  90\" de jeu ";
                    }  if ($_SESSION['dFInfo']['match14']['tour'] == 1) {
                        echo " 120\" de jeu ";
                    } ?>
                    <?php if ($_SESSION['dFInfo']['match14']['tour'] == 2) {
                        echo " seances de tir au but ";
                    } ?>
                </p>
                <p><?= $_SESSION['PFinale']['match15']['equipe2']['nom'] ?> est qualifié pour la petifte finale </p>
            </div>
            </div>

        </div>
    </center>
    <?php
    if ($_SESSION['match13'][0] == false && $_SESSION['match14'][0] == false) { ?>
        <script>
            document.querySelector('#suivant').href = "./petiteFinale.php";
            document.querySelector('#suivant').style.opacity = "1";
        </script>
    <?php } ?>
</body>

</html>