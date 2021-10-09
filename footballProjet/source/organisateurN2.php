<?php
// 1eA VS 2eB
$_SESSION['dFInfo']['match13']['equipe1']['nom'] = $_SESSION['groupeA'][0]['nomEquipe'];
$_SESSION['dFInfo']['match13']['equipe1']['drapeau'] = $_SESSION['groupeA'][0]['drapeau'];

$_SESSION['dFInfo']['match13']['equipe2']['nom'] = $_SESSION['groupeB'][1]['nomEquipe'];
$_SESSION['dFInfo']['match13']['equipe2']['drapeau'] = $_SESSION['groupeB'][1]['drapeau'];

// 1eB VS 2eA

$_SESSION['dFInfo']['match14']['equipe1']['nom'] = $_SESSION['groupeB'][0]['nomEquipe'];
$_SESSION['dFInfo']['match14']['equipe1']['drapeau'] = $_SESSION['groupeB'][0]['drapeau'];
$_SESSION['dFInfo']['match14']['equipe2']['nom'] = $_SESSION['groupeA'][1]["nomEquipe"];
$_SESSION['dFInfo']['match14']['equipe2']['drapeau'] = $_SESSION['groupeA'][1]["drapeau"];

include 'source/qualifiant.php';
function organisateurN2($niveau, $idmatch, $submit)
{

    $equipe2 = rand(0, 5);
    $equipe1 = rand(0, 5);

    $match = 'match' . $idmatch;

    if (isset($_POST[$submit]) && $_SESSION[$match][0] && $_SESSION[$niveau][$match]['tour'] == 0) {
        $_SESSION[$match][1] = true;
        $_SESSION[$niveau][$match]['equipe1']['score'] = $equipe1;
        $_SESSION[$niveau][$match]['equipe2']['score'] = $equipe2;
        $_SESSION[$match][0] = false;
        if ($_SESSION[$niveau][$match]['equipe1']['score'] == $_SESSION[$niveau][$match]['equipe2']['score']) {
            $_SESSION[$niveau][$match]['tour'] = 1;
        } else {
            if ($_SESSION[$niveau][$match]['equipe1']['score'] > $_SESSION[$niveau][$match]['equipe2']['score']) {
                qualificationEquipeUn($niveau, $idmatch, $submit);
                $_SESSION[$niveau][$match]['statistic'] = true;
              
            } else {
                qualificationEquipeDeux($niveau, $idmatch, $submit);
                $_SESSION[$niveau][$match]['statistic'] = true;
                
              
            }
        }
    } elseif (isset($_POST[$submit]) &&   $_SESSION[$niveau][$match]['prolongation']['etat'][0]  && $_SESSION[$niveau][$match]['tour'] == 1) {
        $_SESSION[$niveau][$match]['prolongation']['scoreEquipe1'] =  $equipe1;
        $_SESSION[$niveau][$match]['prolongation']['scoreEquipe2'] =  $equipe2;
        $_SESSION[$niveau][$match]['prolongation']['etat'][0] = false;

        if ($_SESSION[$niveau][$match]['prolongation']['scoreEquipe1'] ==   $_SESSION[$niveau][$match]['prolongation']['scoreEquipe2']) {
            $_SESSION[$niveau][$match]['tour'] = 2;

            $penalite = rand(0, 1);
            if ($penalite == 0) {
                qualificationEquipeUn($niveau, $idmatch, $submit);
            } else {
                qualificationEquipeDeux($niveau, $idmatch, $submit);
            }
            $_SESSION[$niveau][$match]['statistic'] = true;
        } else {
            if ($_SESSION[$niveau][$match]['equipe1']['score'] > $_SESSION[$niveau][$match]['equipe2']['score']) {
                qualificationEquipeUn($niveau, $idmatch, $submit);
                $_SESSION[$niveau][$match]['statistic'] = true;
            } else {
                qualificationEquipeDeux($niveau, $idmatch, $submit);
                $_SESSION[$niveau][$match]['statistic'] = true;
            }
        }
    }
}
