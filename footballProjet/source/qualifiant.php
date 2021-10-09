<?php

function qualificationEquipeUn($niveau, $idmatch,$submit)
{
    $match = 'match' . $idmatch;
    $nextMatch = 'match' . ($idmatch + 1);
    if ($niveau== 'dFInfo') {
       
        if ($submit=='submit13' || $submit=='submitplg13') {
       
            $_SESSION['GFinale']['match16']['equipe1']['nom'] = $_SESSION[$niveau][$match]['equipe1']['nom'];
            $_SESSION['GFinale']['match16']['equipe1']['drapeau'] = $_SESSION[$niveau][$match]['equipe1']['drapeau'];

            $_SESSION['PFinale']['match15']['equipe1']['nom'] = $_SESSION[$niveau][$match]['equipe2']['nom'];
            $_SESSION['PFinale']['match15']['equipe1']['drapeau'] = $_SESSION[$niveau][$match]['equipe2']['drapeau'];
            $_SESSION[$nextMatch][0] = true;
        } elseif ($submit== 'submit14'  ||  $submit=='submitplg14') {
            $_SESSION['GFinale']['match16']['equipe2']['nom'] = $_SESSION[$niveau][$match]['equipe1']['nom'];
            $_SESSION['GFinale']['match16']['equipe2']['drapeau'] = $_SESSION[$niveau][$match]['equipe1']['drapeau'];


            $_SESSION['PFinale']['match15']['equipe2']['nom'] = $_SESSION[$niveau][$match]['equipe2']['nom'];
            $_SESSION['PFinale']['match15']['equipe2']['drapeau'] = $_SESSION[$niveau][$match]['equipe2']['drapeau'];
        }
    } else {
        $_SESSION[$niveau][$match]['champion']['nom'] = $_SESSION[$niveau][$match]['equipe1']['nom'];
        $_SESSION[$niveau][$match]['champion']['drapeau'] = $_SESSION[$niveau][$match]['equipe1']['drapeau'];
        $_SESSION[$niveau][$match]['2eplace']['nom'] = $_SESSION[$niveau][$match]['equipe2']['nom'];
        $_SESSION[$niveau][$match]['2eplace']['drapeau'] = $_SESSION[$niveau][$match]['equipe2']['drapeau'];
    }
}



function qualificationEquipeDeux($niveau, $idmatch,$submit)
{
    $match = 'match' . $idmatch;
    $nextMatch = 'match' . ($idmatch + 1);
    if ($niveau == 'dFInfo') {
        if ($submit=='submit13' || $submit=='submitplg13') {
            
            $_SESSION['GFinale']['match16']['equipe1']['nom'] = $_SESSION[$niveau][$match]['equipe2']['nom'];
            $_SESSION['GFinale']['match16']['equipe1']['drapeau'] = $_SESSION[$niveau][$match]['equipe2']['drapeau'];


            $_SESSION['PFinale']['match15']['equipe1']['nom'] = $_SESSION[$niveau][$match]['equipe1']['nom'];
            $_SESSION['PFinale']['match15']['equipe1']['drapeau'] = $_SESSION[$niveau][$match]['equipe1']['drapeau'];

            $_SESSION[$nextMatch][0] = true;
        } elseif ($submit == 'submit14'  || $submit=='submitplg14') {
            $_SESSION['GFinale']['match16']['equipe2']['nom'] = $_SESSION[$niveau][$match]['equipe2']['nom'];
            $_SESSION['GFinale']['match16']['equipe2']['drapeau'] = $_SESSION[$niveau][$match]['equipe2']['drapeau'];


            $_SESSION['PFinale']['match15']['equipe2']['nom'] = $_SESSION[$niveau][$match]['equipe1']['nom'];
            $_SESSION['PFinale']['match15']['equipe2']['drapeau'] = $_SESSION[$niveau][$match]['equipe1']['drapeau'];
        }
    } else {
        $_SESSION[$niveau][$match]['champion']['nom'] = $_SESSION[$niveau][$match]['equipe2']['nom'];
        $_SESSION[$niveau][$match]['champion']['drapeau'] = $_SESSION[$niveau][$match]['equipe2']['drapeau'];

        $_SESSION[$niveau][$match]['2eplace']['nom'] = $_SESSION[$niveau][$match]['equipe1']['nom'];
        $_SESSION[$niveau][$match]['2eplace']['drapeau'] = $_SESSION[$niveau][$match]['equipe1']['drapeau'];
    }
}
