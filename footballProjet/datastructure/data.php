<?php

//  cette fonction constituee la base de donnee ou le squelete qui initialise toutes les variables indispensable de chaque equipe

   function createEqipe($position,$equipe,$drapeau)
   {
    $_SESSION[$position]=[
    "nomEquipe"=>$equipe,
    "drapeau"=>$drapeau,
    "scores"=>[0,0,0],
    "matchJoue"=>0,
    "matchGagne"=>0,
    "matchNul"=>0,
    "matchPerdu"=>0,
    "butPour"=>0,
    "butContre"=>0, 
    "difference"=>0,
    "points"=>0
    ];
   }
?>