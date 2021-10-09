<?php
function positionnerGroupeB()
{
  // tableau de l'equipe du groupe B
  $_SESSION['groupeB'] = [
    'equipeUnGroupeB' =>
    [
      "drapeau" =>'<img src=' . $_SESSION['equipe1GroupeB']["drapeau"] . '>',
      "nomEquipe" => $_SESSION['equipe1GroupeB']["nomEquipe"],
      "matchJoue" => $_SESSION['equipe1GroupeB']["matchJoue"],
      "matchGagne" => $_SESSION['equipe1GroupeB']["matchGagne"],
      "matchNul" => $_SESSION['equipe1GroupeB']["matchNul"],
      "matchPerdu" => $_SESSION['equipe1GroupeB']["matchPerdu"],
      "butPour" => $_SESSION['equipe1GroupeB']["butPour"],
      "butContre" => $_SESSION['equipe1GroupeB']["butContre"],
      "difference" => $_SESSION['equipe1GroupeB']["difference"],
      "points" => $_SESSION['equipe1GroupeB']["points"]
    ],
    "equipeDeuxGroupeB" =>
    [
      "drapeau" =>'<img src='.$_SESSION['equipe2GroupeB']["drapeau"].'>',
      "nomEquipe" => $_SESSION['equipe2GroupeB']["nomEquipe"],
      "matchJoue" => $_SESSION['equipe2GroupeB']["matchJoue"],
      "matchGagne" => $_SESSION['equipe2GroupeB']["matchGagne"],
      "matchNul" => $_SESSION['equipe2GroupeB']["matchNul"],
      "matchPerdu" => $_SESSION['equipe2GroupeB']["matchPerdu"],
      "butPour" => $_SESSION['equipe2GroupeB']["butPour"],
      "butContre" => $_SESSION['equipe2GroupeB']["butContre"],
      "difference" => $_SESSION['equipe2GroupeB']["difference"],
      "points" => $_SESSION['equipe2GroupeB']["points"]
    ],
    "equipeTroisGroupeB" =>
    [
      "drapeau" =>'<img src='.$_SESSION['equipe3GroupeB']["drapeau"].'>',
      "nomEquipe" => $_SESSION['equipe3GroupeB']["nomEquipe"],
      "matchJoue" => $_SESSION['equipe3GroupeB']["matchJoue"],
      "matchGagne" => $_SESSION['equipe3GroupeB']["matchGagne"],
      "matchNul" => $_SESSION['equipe3GroupeB']["matchNul"],
      "matchPerdu" => $_SESSION['equipe3GroupeB']["matchPerdu"],
      "butPour" => $_SESSION['equipe3GroupeB']["butPour"],
      "butContre" => $_SESSION['equipe3GroupeB']["butContre"],
      "difference" => $_SESSION['equipe3GroupeB']["difference"],
      "points" => $_SESSION['equipe3GroupeB']["points"]
    ],
    "equipeQuatreGroupeB" =>
    [
      "drapeau" =>'<img src='.$_SESSION['equipe4GroupeB']["drapeau"].'>',
      "nomEquipe" => $_SESSION['equipe4GroupeB']["nomEquipe"],
      "matchJoue" => $_SESSION['equipe4GroupeB']["matchJoue"],
      "matchGagne" => $_SESSION['equipe4GroupeB']["matchGagne"],
      "matchNul" => $_SESSION['equipe4GroupeB']["matchNul"],
      "matchPerdu" => $_SESSION['equipe4GroupeB']["matchPerdu"],
      "butPour" => $_SESSION['equipe4GroupeB']["butPour"],
      "butContre" => $_SESSION['equipe4GroupeB']["butContre"],
      "difference" => $_SESSION['equipe4GroupeB']["difference"],
      "points" => $_SESSION['equipe4GroupeB']["points"]
    ]

  ];
  
  usort($_SESSION['groupeB'], function ($x, $y) {
    return $y["difference"] - $x["difference"];
  });
  
  usort($_SESSION['groupeB'], function ($y, $x) {
    return $y["butContre"] - $x["butContre"];
  });


  usort($_SESSION['groupeB'], function ($x, $y) {
    return $y["butPour"] - $x["butPour"];
  });

  // usort pour ordonner le tableau dans l'ordre decroissant
  usort($_SESSION['groupeB'], function ($x, $y) {
    return $y["points"] - $x["points"];
  });



  // Affichage du tableau par un foreach imbrique
  $i=0;
  foreach ($_SESSION['groupeB'] as $key => $value) {
    if ($i%2==0) {
      echo  '<tr id="bg1">';
      }
      else{
        echo  '<tr id="bg2">';
      }
    foreach ($value as $key => $value) {
      echo "<td>" . $value . "</td>";
    }
    echo "<tr>";
    $i++;
  }
}
