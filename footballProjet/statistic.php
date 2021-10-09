<?php
session_start();

// permet detruire toutes les sessions en cliquant sur le button recommencer 

if (isset($_POST['Deconnecter'] ) ){
    $_SESSION=array();
    session_destroy();
header("Location:index.php"); 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/statistic.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.1-web/css/all.css">
    <title>Document</title>
</head>

<body>
    <div class="statistic">
            
        <div class="contenu" id="prime">
            <center>
                <table>
                    <thead>
                        <th id="pays">pays</th>
                        <th>prime</th>
                        <th>Niveau</th>

                    </thead>
                    <tbody>
                         <!-- =================1e============== -->
                         <tr id="bg2">
                            <td id="pays">
                                <div> <?= $_SESSION['GFinale']['match16']['champion']['drapeau'] ?> </div>
                                <div id="nom"> <?= $_SESSION['GFinale']['match16']['champion']['nom'] ?> </div>
                            </td>
                            <td> 
                                <div id="primes">
                                <img src="./assets/image/Cup2.png" alt="">
                                <img src="./assets/image/logo 1.png" alt="">
                                <span><i class="fas fa-euro-sign"></i> 100'000'000</span>
                            </div>
                            </td>
                            <td  class="niveau">LE GRAND CHAMPION</td>
                        </tr>

                        <!-- =================2e============== -->
                        <tr id="bg1">
                            <td id="pays">
                                <div><?=$_SESSION['GFinale']['match16']['2eplace']['drapeau']?></div>
                                <div id="nom"><?=$_SESSION['GFinale']['match16']['2eplace']['nom']?></div>
                            </td>
                            <td>
                            <div id="primes">
                            <img src="./assets/image/logo 2.png" alt="">
                            <span><i class="fas fa-euro-sign"></i> 50'000'000</span>
                            </div>
                            </td>
                            <td  class="niveau">2<sup>e</sup> PLACE</td>
                        </tr>

                        <!-- =================3e============== -->
                        <tr id="bg2">
                            <td id="pays">
                                <div><?= $_SESSION['PFinale']['match15']['champion']['drapeau']?></div>
                                <div id="nom"><?= $_SESSION['PFinale']['match15']['champion']['nom'] ?></div>
                            </td>
                            <td>
                            <div id="primes">
                            <img src="./assets/image/logo 3.png" alt="">
                            <span><i class="fas fa-euro-sign"></i> 25'000'000</span>
                            </div>
                            </td>
                            <td  class="niveau">3<sup>e</sup> PLACE</td>
                        </tr>
                          <!-- =================4e============== -->
                          <tr id="bg1">
                            <td id="pays">
                                <div><?=$_SESSION['PFinale']['match15']['2eplace']['drapeau']?></div>
                                <div id="nom"><?=$_SESSION['PFinale']['match15']['2eplace']['nom']?></div>
                            </td>
                            <td>
                             <div id="primes">
                             <span><i class="fas fa-euro-sign"></i> 20'000'000</span>
                            </div>
                            </td>
                            <td  class="niveau">4<sup>e</sup> PLACE</td>
                        </tr>
                        <!-- =================5e============== -->
                        <tr id="bg2">
                            <td id="pays">
                                <div><?= $_SESSION['groupeA'][2]['drapeau'] ?></div>
                                <div id="nom"><?= $_SESSION['groupeA'][2]['nomEquipe'] ?></div>
                            </td>
                            <td>
                            <div id="primes">
                            <span><i class="fas fa-euro-sign"></i> 15'000'000</span>
                            </div>
                            </td>
                            <td class="niveau">3e phase de poule</td>
                        </tr>
                        <!-- =================6e============== -->
                        <tr id="bg1">
                            <td id="pays">
                                <div><?= $_SESSION['groupeB'][2]['drapeau'] ?></div>
                                <div id="nom"><?= $_SESSION['groupeB'][2]['nomEquipe'] ?></div>
                            </td>
                            <td>
                            <div id="primes">
                            <span><i class="fas fa-euro-sign"></i> 15'000'000</span>
                            </div>
                            </td>
                            <td  class="niveau">3e phase de poule</td>
                        </tr>
                        <!-- =================7e============== -->
                        <tr id="bg2">
                            <td id="pays">
                                <div><?= $_SESSION['groupeA'][3]['drapeau'] ?></div>
                                <div id="nom"><?= $_SESSION['groupeA'][3]['nomEquipe'] ?></div>
                            </td>
                            <td>
                            <div id="primes">
                            <span><i class="fas fa-euro-sign"></i> 10'000'000</span>
                            </div>
                            </td>
                            <td  class="niveau">4e phase de poule</td>
                        </tr>
                       
                        <!-- =================8e============== -->
                        <tr id="bg1">
                            <td id="pays">
                                <div><?= $_SESSION['groupeB'][3]['drapeau'] ?></div>
                                <div id="nom"><?= $_SESSION['groupeB'][3]['nomEquipe'] ?></div>
                                <div></div>
                            </td>
                            <td>
                            <div id="primes">
                            <span><i class="fas fa-euro-sign"></i> 10'000'000</span>
                            </div>
                            </td>
                            <td class="niveau">4e phase de poule</td>
                        </tr>
                    </tbody>
                </table>


            </center>
        </div>
        <div class="buttonFoot">
        <a href="grandeFinale.php">Back</a>
            <form action="" method="post">
            <button name="Deconnecter" type="submit">Recommencer</button>
            </form>
        </div>
        
        <div class="iconFoot">
            <ul>
                <li><i class="fab fa-facebook-f "></i></li>
                <li><i class="fab fa-twitter "></i></li>
                <li><i class="fab fa-instagram "></i></li>
                <li><i class="fab fa-github "></i></li>
                <li><i class="fab fa-youtube"></i></li>
            </ul>
        </div>
    </div>
    <script src="./js/statistic.js"></script>
</body>

</html>