<?php
function positionnerGroupeA()
{
  // tableau de l'equipe du groupe A 
  $_SESSION['groupeA'] = [
    'equipe1GroupeA' =>
    [
      "drapeau" =>'<img src='.$_SESSION['equipe1GroupeA']["drapeau"].'>',
      "nomEquipe" => $_SESSION['equipe1GroupeA']["nomEquipe"],
      "matchJoue" => $_SESSION['equipe1GroupeA']["matchJoue"],
      "matchGagne" => $_SESSION['equipe1GroupeA']["matchGagne"],
      "matchNul" => $_SESSION['equipe1GroupeA']["matchNul"],
      "matchPerdu" => $_SESSION['equipe1GroupeA']["matchPerdu"],
      "butPour" => $_SESSION['equipe1GroupeA']["butPour"],
      "butContre" => $_SESSION['equipe1GroupeA']["butContre"],
      "difference" => $_SESSION['equipe1GroupeA']["difference"],
      "points" => $_SESSION['equipe1GroupeA']["points"]
    ],
    "equipeDeuxGroupeA" =>
    [
      "drapeau" =>'<img src='.$_SESSION['equipe2GroupeA']["drapeau"].'>',
      "nomEquipe" => $_SESSION['equipe2GroupeA']["nomEquipe"],
      "matchJoue" => $_SESSION['equipe2GroupeA']["matchJoue"],
      "matchGagne" => $_SESSION['equipe2GroupeA']["matchGagne"],
      "matchNul" => $_SESSION['equipe2GroupeA']["matchNul"],
      "matchPerdu" => $_SESSION['equipe2GroupeA']["matchPerdu"],
      "butPour" => $_SESSION['equipe2GroupeA']["butPour"],
      "butContre" => $_SESSION['equipe2GroupeA']["butContre"],
      "difference" => $_SESSION['equipe2GroupeA']["difference"],
      "points" => $_SESSION['equipe2GroupeA']["points"]
    ],
    "equipeTroisGroupeA" =>
    [
      "drapeau" => '<img src='.$_SESSION['equipe3GroupeA']["drapeau"].'>',
      "nomEquipe" => $_SESSION['equipe3GroupeA']["nomEquipe"],
      "matchJoue" => $_SESSION['equipe3GroupeA']["matchJoue"],
      "matchGagne" => $_SESSION['equipe3GroupeA']["matchGagne"],
      "matchNul" => $_SESSION['equipe3GroupeA']["matchNul"],
      "matchPerdu" => $_SESSION['equipe3GroupeA']["matchPerdu"],
      "butPour" => $_SESSION['equipe3GroupeA']["butPour"],
      "butContre" => $_SESSION['equipe3GroupeA']["butContre"],
      "difference" => $_SESSION['equipe3GroupeA']["difference"],
      "points" => $_SESSION['equipe3GroupeA']["points"]
    ],
    "equipeQuatreGroupeA" =>
    [
      "drapeau" =>'<img src='.$_SESSION['equipe4GroupeA']["drapeau"].'>',
      "nomEquipe" => $_SESSION['equipe4GroupeA']["nomEquipe"],
      "matchJoue" => $_SESSION['equipe4GroupeA']["matchJoue"],
      "matchGagne" => $_SESSION['equipe4GroupeA']["matchGagne"],
      "matchNul" => $_SESSION['equipe4GroupeA']["matchNul"],
      "matchPerdu" => $_SESSION['equipe4GroupeA']["matchPerdu"],
      "butPour" => $_SESSION['equipe4GroupeA']["butPour"],
      "butContre" => $_SESSION['equipe4GroupeA']["butContre"],
      "difference" => $_SESSION['equipe4GroupeA']["difference"],
      "points" => $_SESSION['equipe4GroupeA']["points"]
    ]

  ];

  usort($_SESSION['groupeA'], function ($x, $y) {
    return $y["difference"] - $x["difference"];
  });

  usort($_SESSION['groupeA'], function ($y, $x) {
    return $y["butContre"] - $x["butContre"];
  });


  usort($_SESSION['groupeA'], function ($x, $y) {
    return $y["butPour"] - $x["butPour"];
  });

  // usort pour ordonner le tableau dans l'ordre decroissant:
  usort($_SESSION['groupeA'], function ($x, $y) {
    return $y["points"] - $x["points"];
  });

  // Affichage du tableau dans l'ordre decroissant par un foreach imbrique
$i=0;
  foreach ($_SESSION['groupeA'] as $key => $value) {
    if ($i%2==0) {
    echo  '<tr id="bg1">';
    }
    else{
      echo  '<tr id="bg2">';
    }
    foreach ($value as $key => $value) {
      echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
   $i+=1; 
  }
}
