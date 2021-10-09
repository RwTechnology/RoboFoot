<?php

// cette fonction permet de mettre a jour les donnees de base ou les donnee de la table classement tout en connaissant le protocol de positionne des deux equipe et l'id du match

function classerData($dataUn,$dataDeux,$idmatch)
{ 
    $_SESSION[$dataUn]["matchJoue"]=($idmatch+1);
    $_SESSION[$dataDeux]["matchJoue"]=($idmatch+1);

    if ($_SESSION[$dataUn]["scores"][$idmatch]>$_SESSION[$dataDeux]["scores"][$idmatch]) 
    {
        $_SESSION[$dataUn]["matchGagne"]+=1;
        $_SESSION[$dataUn]["butPour"]+=$_SESSION[$dataUn]["scores"][$idmatch];
        $_SESSION[$dataUn]["butContre"]+=$_SESSION[$dataDeux]["scores"][$idmatch];
        $_SESSION[$dataUn]["difference"]+=($_SESSION[$dataUn]["scores"][$idmatch] - $_SESSION[$dataDeux]["scores"][$idmatch]);
        $_SESSION[$dataUn]["points"]+=3;

        $_SESSION[$dataDeux]["matchPerdu"]+=1;
        $_SESSION[$dataDeux]["butPour"]+=$_SESSION[$dataDeux]["scores"][$idmatch];
        $_SESSION[$dataDeux]["butContre"]+=$_SESSION[$dataUn]["scores"][$idmatch];
        $_SESSION[$dataDeux]["difference"]+=($_SESSION[$dataDeux]["scores"][$idmatch] - $_SESSION[$dataUn]["scores"][$idmatch]);
    }
    elseif($_SESSION[$dataUn]["scores"][$idmatch] < $_SESSION[$dataDeux]["scores"][$idmatch])
    {
        $_SESSION[$dataUn]["matchPerdu"]+=1;
        $_SESSION[$dataUn]["butPour"]+=$_SESSION[$dataUn]["scores"][$idmatch];
        $_SESSION[$dataUn]["butContre"]+=$_SESSION[$dataDeux]["scores"][$idmatch];
        $_SESSION[$dataUn]["difference"]+=($_SESSION[$dataUn]["scores"][$idmatch] - $_SESSION[$dataDeux]["scores"][$idmatch]);


        $_SESSION[$dataDeux]["matchGagne"]+=1;
        $_SESSION[$dataDeux]["butPour"]+=$_SESSION[$dataDeux]["scores"][$idmatch];
        $_SESSION[$dataDeux]["butContre"]+=$_SESSION[$dataUn]["scores"][$idmatch];
        $_SESSION[$dataDeux]["difference"]+=($_SESSION[$dataDeux]["scores"][$idmatch] - $_SESSION[$dataUn]["scores"][$idmatch]);
        $_SESSION[$dataDeux]["points"]+=3;
    }
    else
    {
        $_SESSION[$dataUn]["matchNul"]+=1;
        $_SESSION[$dataUn]["butPour"]+=$_SESSION[$dataUn]["scores"][$idmatch];
        $_SESSION[$dataUn]["butContre"]+=$_SESSION[$dataDeux]["scores"][$idmatch];
        $_SESSION[$dataUn]["difference"]+=($_SESSION[$dataUn]["scores"][$idmatch] - $_SESSION[$dataDeux]["scores"][$idmatch]);
        $_SESSION[$dataUn]["points"]+=1;  
  
        $_SESSION[$dataDeux]["matchNul"]+=1;
        $_SESSION[$dataDeux]["butPour"]+=$_SESSION[$dataDeux]["scores"][$idmatch];
        $_SESSION[$dataDeux]["butContre"]+=$_SESSION[$dataUn]["scores"][$idmatch];
        $_SESSION[$dataDeux]["difference"]+=($_SESSION[$dataDeux]["scores"][$idmatch] - $_SESSION[$dataUn]["scores"][$idmatch]);
        $_SESSION[$dataDeux]["points"]+=1;
    }
}