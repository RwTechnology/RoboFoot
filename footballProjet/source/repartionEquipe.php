<?php
// ce fichier permet de reduire le nombre de ligne de code du fichier terrain de jeu de ce fait en connaissant de l'iteration et le groupe il donne l'affiche(equipe1 vs equipe2) du match en cours

function repartionEquipeParMatch($i,$groupe)
{

    if($i==0)
    {
       return [
       "equipe1".$groupe,
       "equipe2".$groupe,
   ] ; 
    } 

    if($i==1)
    {
       return [
       "equipe3".$groupe,
       "equipe4".$groupe,
   ] ; 
    } 

    if($i==2)
    {
       return [
       "equipe1".$groupe,
       "equipe3".$groupe,
   ] ; 

    } 

    if($i==3)
    {
       return [
       "equipe2".$groupe,
       "equipe4".$groupe,
   ] ; 
    } 

    if($i==4)
    {
       return [
       "equipe1".$groupe,
       "equipe4".$groupe,
   ] ; 
    } 

    if($i==5)
    {
       return [
       "equipe2".$groupe,
       "equipe3".$groupe,
   ] ; 
    } 
}
 ?>