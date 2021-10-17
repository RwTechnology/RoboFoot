<?php
session_start();
include 'source/repartionEquipe.php';
include 'source/organisateur.php';
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
        <a href="index.php">Groupe A/B</a>
        <div class="logo">
            <img src="./assets/image/Cup2.png" alt="">
            <p>coupe 3 <sup>e</sup> INFO</p>
        </div>
        <a href="classement.php">Classement</a>
    </nav>



    <h1>Espace jeu du groupe A </h1>

    <center>
        <!-- Affichage chaque composant du groupe A via une boucle for -->
        <div class="tab" id="tab1">
            <?php for ($i = 0; $i < 6; $i++) {
                /*cette fonction retourne un tableau contenant le protocol permettant d'identifier de facon unique chaque equipe du groupe A */
                
                $equipe = repartionEquipeParMatch($i, "GroupeA");
                // identifiant de chaque match
                $match = "match" . ($i + 1);
            ?>
                <div class="ligne" title="Match <?= $i + 1 ?>">
                    <table class="agbr">
                        <tr>
                            <td><?= $_SESSION[$equipe[0]]["nomEquipe"] ?></td>
                            <td><img src=<?= $_SESSION[$equipe[0]]["drapeau"] ?>></td>
                        </tr>
                    </table>
                    <div class="score">
                      
                            <div id="btn">
                                <?php if ($_SESSION[$match][1] == false) { ?>
                                    <form action="" method="post">
                                 <input type="number" min="0" max="10" name="scr1M<?= $i + 1 ?>" <?php if ($_SESSION[$match][0] == false) { ?> disabled="disabled" class="score" <?php  } ?>> -
                                 <input type="number" min="0" max="10" name="scr2M<?= $i + 1 ?>" <?php if ($_SESSION[$match][0] == false) { ?> disabled="disabled" class="score" <?php  } ?>>
                                 <div class="submit">
                                 <input type="submit"   name="submit<?= $i + 1 ?>" <?php if ($_SESSION[$match][0] == false) { ?> disabled="disabled" class="score" <?php  } ?>>
                                 </div>
                                 </form>
                              <?php  } else {
                                    if ($i < 2) {
                                        echo $_SESSION[$equipe[0]]['scores'][0] . " - " . $_SESSION[$equipe[1]]['scores'][0];
                                    } elseif ($i < 4) {
                                        echo $_SESSION[$equipe[0]]['scores'][1] . " - " . $_SESSION[$equipe[1]]['scores'][1];
                                    } else {
                                        echo $_SESSION[$equipe[0]]['scores'][2] . " - " . $_SESSION[$equipe[1]]['scores'][2];
                                    }
                                }
                                $submit = "submit" . ($i + 1);
                                if (isset($_POST[$submit])) { ?>
                                    <script>
                                        setTimeout(() => {
                                            location.href = "#tab2";
                                        }, 1500);
                                    </script>
                                <?php
                                }
                                ?>
                            </div>

                    </div>
                    <table class="agbr">
                        <tr>
                            <td><img src=<?= $_SESSION[$equipe[1]]["drapeau"] ?>></td>
                            <td><?= $_SESSION[$equipe[1]]["nomEquipe"] ?></td>
                        </tr>
                    </table>
                </div>
            <?php } ?>

        </div>


        <h1>Espace jeu du groupe B </h1>

        <div class="tab" title="Match <?= $i + 7 ?>" id="tab2">

            <?php for ($i = 0; $i < 6; $i++) {
                $equipe = repartionEquipeParMatch($i, "GroupeB");
                $match = "match" . ($i + 7);
            ?>
                <div class="ligne">
                    <table class="agbr">
                        <tr>
                            <td><?= $_SESSION[$equipe[0]]["nomEquipe"] ?></td>
                            <td><img src=<?= $_SESSION[$equipe[0]]["drapeau"] ?>></td>
                        </tr>
                    </table>
                    <div class="score">
                            <div id="btn">
                                <?php if ($_SESSION[$match][1] == false) { ?>
                                    <form action="" method="post">
                                    <input type="number" min="0" max="10"  name="scr1M<?= $i + 7 ?>" <?php if ($_SESSION[$match][0] == false) { ?> disabled="disabled" class="score" <?php  } ?>> -
                                 <input type="number" min="0" max="10"  name="scr2M<?= $i + 7 ?>" <?php if ($_SESSION[$match][0] == false) { ?> disabled="disabled" class="score" <?php  } ?>>
                                 <div class="submit">
                                 <input type="submit" name="submit<?= $i + 7 ?>" <?php if ($_SESSION[$match][0] == false) { ?> disabled="disabled" class="score" <?php  } ?>>
                                 </div>
                                 </form>
                              <?php  } else {
                                    if ($i < 2) {
                                        echo $_SESSION[$equipe[0]]['scores'][0] . " - " . $_SESSION[$equipe[1]]['scores'][0];
                                    } elseif ($i < 4) {
                                        echo $_SESSION[$equipe[0]]['scores'][1] . " - " . $_SESSION[$equipe[1]]['scores'][1];
                                    } else {
                                        echo $_SESSION[$equipe[0]]['scores'][2] . " - " . $_SESSION[$equipe[1]]['scores'][2];
                                    }
                                }
                                $submit = "submit" . ($i + 7);
                                if (isset($_POST[$submit])) { ?>
                                    <script>
                                        setTimeout(() => {
                                            location.href = "#tab1";
                                        }, 2000);
                                    </script>
                                <?php
                                }
                                if (isset($_POST['submit12'])) { ?>

                                    <script>
                                        setTimeout(() => {
                                            location.href = "terrainDeJeu.php";
                                        }, 2000);
                                    </script>
                                <?php
                                }
                                ?>
                            </div>
                    </div>
                    <table class="agbr">
                        <tr>
                            <td><img src=<?= $_SESSION[$equipe[1]]["drapeau"] ?>></td>
                            <td><?= $_SESSION[$equipe[1]]["nomEquipe"] ?></td>
                        </tr>
                    </table>
                </div>
            <?php } ?>
        </div>
    </center>
</body>

</html>