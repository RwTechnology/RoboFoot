<?php
session_start();
include 'source/tirage.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./assets/image/Cup2.png" type="image/x-icon">
  <link rel="stylesheet" href="./css/style.css">
  <title>RobotFoot</title>
</head>

<body>
  <div class="container">
    <header>
      <h1>COUPE 3<sup>e</sup> INFO</h1>
    </header>

    <section class="container2">
      <table>
        <tr id="t1">
          <th colspan="2">LOT 1 TDS</th>
          <th colspan="2">LOT 2 TDS</th>
          <th colspan="2">LOT 3 TDS</th>
          <th colspan="2">LOT 4 TDS</th>
        </tr>

        <tr id="t2">
          <?php for ($i = 0; $i < 8; $i++) {
            if ($i % 2 == 0) {
          ?>
              <td class="cellDrapeau">
                <img src=<?= $drapeau[$i] ?>>
              </td>
              <td>
                <?= $equipe[$i] ?>
              </td>
          <?php }
          } ?>
        </tr>

        <tr id="t3">
          <?php for ($i = 0; $i < 8; $i++) {
            if ($i % 2 != 0) {
          ?>
              <td class="cellDrapeau">
                <img src=<?= $drapeau[$i] ?>>
              </td>

              <td>
                <?= $equipe[$i] ?>
              </td>
          <?php }
          } ?>
        </tr>

      </table>
    </section>
    <section class="container3">
      <form action="" method="post">
        <input type="submit" name="tirage" value="Tirage" id="button">
      </form>
    </section>

    <?php if (isset($_POST['tirage'])) {
      include 'datastructure/data.php';
      include 'datastructure/dataSup.php';

      createEqipe('equipe1GroupeA', $equipe[$indiceUnGroupeA], $drapeau[$indiceUnGroupeA]);
      createEqipe('equipe2GroupeA', $equipe[$indiceDeuxGroupeA], $drapeau[$indiceDeuxGroupeA]);
      createEqipe('equipe3GroupeA', $equipe[$indiceTroisGroupeA], $drapeau[$indiceTroisGroupeA]);
      createEqipe('equipe4GroupeA', $equipe[$indiceQuatreGroupeA], $drapeau[$indiceQuatreGroupeA]);

      createEqipe('equipe1GroupeB', $equipe[$indiceUnGroupeB], $drapeau[$indiceUnGroupeB]);
      createEqipe('equipe2GroupeB', $equipe[$indiceDeuxGroupeB], $drapeau[$indiceDeuxGroupeB]);
      createEqipe('equipe3GroupeB', $equipe[$indiceTroisGroupeB], $drapeau[$indiceTroisGroupeB]);
      createEqipe('equipe4GroupeB', $equipe[$indiceQuatreGroupeB], $drapeau[$indiceQuatreGroupeB]);

      createDemifinale();
     createPetitefinale();
      creategrandefinale();
    ?>

      <section id="container4">

        <script>
          document.querySelector('.container').style.height = "auto";
          location.href = "#container4";
        </script>


        <div>
          <table class="groupeA">
            <tr>
              <th>GROUPE A</th>
            </tr>
            <tr>
              <td class="cellDrapeau"><img src=<?= $_SESSION['equipe1GroupeA']["drapeau"] ?>></td>
              <td><?= $_SESSION['equipe1GroupeA']["nomEquipe"] ?></td>
            </tr>
            <tr>
              <td class="cellDrapeau"><img src=<?= $_SESSION['equipe2GroupeA']["drapeau"] ?>></td>
              <td><?= $_SESSION['equipe2GroupeA']["nomEquipe"] ?></td>
            </tr>
            <tr>
              <td class="cellDrapeau"><img src=<?= $_SESSION['equipe3GroupeA']["drapeau"] ?>></td>
              <td><?= $_SESSION['equipe3GroupeA']["nomEquipe"] ?></td>
            </tr>
            <tr>
              <td class="cellDrapeau"><img src=<?= $_SESSION['equipe4GroupeA']["drapeau"] ?>></td>
              <td><?= $_SESSION['equipe4GroupeA']["nomEquipe"] ?></td>
            </tr>
          </table>
        </div>

        <div class="trophee">
          <img src="./assets/image/Cup2.png" alt="">
        </div>

        <div>
          <table class="groupeA">
            <th>GROUPE B</th>
            <tr>
              <td class="cellDrapeau"><img src=<?= $_SESSION['equipe1GroupeB']["drapeau"] ?>></td>
              <td><?= $_SESSION['equipe1GroupeB']["nomEquipe"] ?></td>
            </tr>
            <tr>
              <td class="cellDrapeau"><img src=<?= $_SESSION['equipe2GroupeB']["drapeau"] ?>></td>
              <td><?= $_SESSION['equipe2GroupeB']["nomEquipe"] ?></td>
            </tr>
            <tr>
              <td class="cellDrapeau"><img src=<?= $_SESSION['equipe3GroupeB']["drapeau"] ?>></td>
              <td><?= $_SESSION['equipe3GroupeB']["nomEquipe"] ?></td>
            </tr>
            <tr>
              <td class="cellDrapeau"><img src=<?= $_SESSION['equipe4GroupeB']["drapeau"] ?>></td>
              <td><?= $_SESSION['equipe4GroupeB']["nomEquipe"] ?></td>
            </tr>
          </table>
        </div>
      </section>

      </section>
      <section class="container3">
        <form action="" method="post">
          <input type="submit" name="valider" value="valider le tirage" id="button">
        </form>
      <?php
    }
    if (isset($_POST['valider'])) {
      header('Location:terrainDeJeu.php');
    }
      ?>
  </div>
</body>

</html>