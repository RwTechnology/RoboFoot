<?php

// ce fichier permet la validation de chaque formulaire(chaque match en phase de poule) tout en attribuant des valeurs aleatoires,en activant et desactivant des matchs et en fin en appellant la fonction classerData() pour la mise a jour en temp reel les donnees de base ou la table de classement

  include 'source/traitementClassement.php';

 

    if (isset($_POST['submit1']) &&  $_SESSION['match1'][0]) {
        $_SESSION['match1'][0]=false;
        $_SESSION['match1'][1]=true;
        $_SESSION['match7'][0]=true;
        $_SESSION['equipe1GroupeA']['scores'][0] = intval($_POST['scr1M1']);
        $_SESSION['equipe2GroupeA']['scores'][0] =  intval($_POST['scr2M1']) ;
        classerData('equipe1GroupeA','equipe2GroupeA',0); 
    } 

    if (isset($_POST['submit2']) &&  $_SESSION['match2'][0]) {
        $_SESSION['match2'][0]=false;
        $_SESSION['match2'][1]=true;
        $_SESSION['match8'][0]=true;
        $_SESSION['equipe3GroupeA']['scores'][0] = intval($_POST['scr1M2']) ;
        $_SESSION['equipe4GroupeA']['scores'][0] = intval($_POST['scr2M2']) ;
        classerData('equipe3GroupeA','equipe4GroupeA',0); 
    } 

    if (isset($_POST['submit3']) &&  $_SESSION['match3'][0]) {
        $_SESSION['match3'][0]=false;
        $_SESSION['match3'][1]=true;
        $_SESSION['match9'][0]=true;
        $_SESSION['equipe1GroupeA']['scores'][1] =  intval($_POST['scr1M3']);
        $_SESSION['equipe3GroupeA']['scores'][1] =  intval($_POST['scr2M3']);
        classerData('equipe1GroupeA','equipe3GroupeA',1); 
    } 

    if (isset($_POST['submit4']) &&  $_SESSION['match4']) {
        $_SESSION['match4'][0]=false;
        $_SESSION['match4'][1]=true;
        $_SESSION['match10'][0]=true;
        $_SESSION['equipe2GroupeA']['scores'][1] =  intval($_POST['scr1M4']) ;
        $_SESSION['equipe4GroupeA']['scores'][1] =  intval($_POST['scr2M4']) ;
        classerData('equipe2GroupeA','equipe4GroupeA',1); 
    } 

    if (isset($_POST['submit5']) &&  $_SESSION['match5'][0]) {
        $_SESSION['match5'][0]=false;
        $_SESSION['match5'][1]=true;
        $_SESSION['match11'][0]=true;
        $_SESSION['equipe1GroupeA']['scores'][2] =  intval($_POST['scr1M5']) ;
        $_SESSION['equipe4GroupeA']['scores'][2] =  intval($_POST['scr2M5']) ;
        classerData('equipe1GroupeA','equipe4GroupeA',2); 
    }

    if (isset($_POST['submit6']) &&  $_SESSION['match6'][0]) {
        $_SESSION['match6'][0]=false;
        $_SESSION['match6'][1]=true;
        $_SESSION['match12'][0]=true;
        $_SESSION['equipe2GroupeA']['scores'][2] =  intval($_POST['scr1M6']) ;
        $_SESSION['equipe3GroupeA']['scores'][2] =  intval($_POST['scr2M6']) ;
        classerData('equipe2GroupeA','equipe3GroupeA',2); 
    } 

    if (isset($_POST['submit7']) &&  $_SESSION['match7'][0]) {
        $_SESSION['match7'][0]=false;
        $_SESSION['match7'][1]=true;
        $_SESSION['match2'][0]=true;
        $_SESSION['equipe1GroupeB']['scores'][0] =  intval($_POST['scr1M7']) ;
        $_SESSION['equipe2GroupeB']['scores'][0] =   intval($_POST['scr2M7']);
        classerData('equipe1GroupeB','equipe2GroupeB',0); 
    } 

    if (isset($_POST['submit8']) &&  $_SESSION['match8'][0]) {
        $_SESSION['match8'][0]=false;
        $_SESSION['match8'][1]=true;
        $_SESSION['match3'][0]=true;
        $_SESSION['equipe3GroupeB']['scores'][0] =  intval($_POST['scr1M8']);
        $_SESSION['equipe4GroupeB']['scores'][0] =  intval($_POST['scr2M8']);
        classerData('equipe3GroupeB','equipe4GroupeB',0); 
    } 

    if (isset($_POST['submit9']) &&  $_SESSION['match9'][0]) { 
        $_SESSION['match9'][0]=false;
        $_SESSION['match9'][1]=true;
        $_SESSION['match4'][0]=true;
        $_SESSION['equipe1GroupeB']['scores'][1] =  intval($_POST['scr1M9']) ;
        $_SESSION['equipe3GroupeB']['scores'][1] =  intval($_POST['scr2M9']) ;
        classerData('equipe1GroupeB','equipe3GroupeB',1); 
    } 

    if (isset($_POST['submit10']) &&  $_SESSION['match10'][0]) {
        $_SESSION['match10'][0]=false;
        $_SESSION['match10'][1]=true;
        $_SESSION['match5'][0]=true;
        $_SESSION['equipe2GroupeB']['scores'][1] =  intval($_POST['scr1M10']) ;
        $_SESSION['equipe4GroupeB']['scores'][1] =  intval($_POST['scr2M10']) ;
        classerData('equipe2GroupeB','equipe4GroupeB',1); 
    } 

    if (isset($_POST['submit11']) &&  $_SESSION['match11'][0]) {
        $_SESSION['match11'][0]=false;
        $_SESSION['match11'][1]=true;
        $_SESSION['match6'][0]=true;
        $_SESSION['equipe1GroupeB']['scores'][2] =  intval($_POST['scr1M11']) ;
        $_SESSION['equipe4GroupeB']['scores'][2] =  intval($_POST['scr2M11']);
        classerData('equipe1GroupeB','equipe4GroupeB',2); 
    } 

    if (isset($_POST['submit12']) &&  $_SESSION['match12'][0]) {
        $_SESSION['match12'][0]=false;
        $_SESSION['match12'][1]=true;
        $_SESSION['equipe2GroupeB']['scores'][2] =  intval($_POST['scr1M12']) ;
        $_SESSION['equipe3GroupeB']['scores'][2] =  intval($_POST['scr2M12']);
        classerData('equipe2GroupeB','equipe3GroupeB',2); 
    }

 ?>