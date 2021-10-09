<?php
  
// ensemble de fonction constituant la base donnee pour les equipes qualifiant 
// la daclaration de chaque tableau sont communes enfin de facilite manipulation de toutes ces donnees dans une fonction 

// ======================== Demie Finale ===================================
function createDemifinale()
{
   $_SESSION['dFInfo'] = [
      'match13' => [
         'equipe1' => [
            "nom" => "",
            "drapeau" => "",
            "score" => ""
         ],

         'equipe2' => [
            "nom" => "",
            "drapeau" => "",
            "score" => ""
         ],
         'tour' => 0, //0=>matchNormal ,1=>prolongation, 2=>penalite
         'statistic'=>false,
         'prolongation' =>
         [
            "scoreEquipe1" => 0,
            "scoreEquipe2" => 0,
            "etat"=>[true,true]
         ],


      ],


      'match14' => [
         'equipe1' => [
            "nom" => "",
            "drapeau" => "",
            "score" => ""
         ],

         'equipe2' => [
            "nom" => "",
            "drapeau" => "",
            "score" => ""
         ],
         'tour' => 0, //0=>matchNormal ,1=>prolongation, 2=>penalite
         'statistic'=>false,
         'prolongation' =>
         [
            "scoreEquipe1" => 0,
            "scoreEquipe2" => 0,
            "etat"=>[true,true]
         ]

      ]
   ];
}



// ======================== Petite Finale ===================================
function createPetitefinale()
{
   $_SESSION['PFinale'] =
      [
         'match15' => [
            'equipe1' => [
               "nom" => "",
               "drapeau" => "",
               "score" => ""
            ],

            'equipe2' => [
               "nom" => "",
               "drapeau" => "",
               "score" => ""
            ],

            'tour' => 0, //0=>matchNormal ,1=>prolongation, 2=>penalite
            'statistic'=>false,
            'prolongation' =>
            [
               "scoreEquipe1" => 0,
               "scoreEquipe2" => 0,
               "etat"=>[true,true]
            ],

            "champion" =>
            [
               "nom" => "",
               "drapeau" => ""
            ],
            '2eplace' =>
            [
               "nom" => "",
               "drapeau" => ""
            ]

         ]
      ];
}



// ======================== Grande Finale ===================================
function creategrandefinale()
{
   $_SESSION['GFinale'] = [
      'match16' => [
         'equipe1' => [
            "nom" => "",
            "drapeau" => "",
            "score" => ""
         ],

         'equipe2' => [
            "nom" => "",
            "drapeau" => "",
            "score" => ""
         ],

         'tour' => 0, //0=>matchNormal ,1=>prolongation, 2=>penalite
         'statistic'=>false,
         'prolongation' =>
         [
            "scoreEquipe1" => 0,
            "scoreEquipe2" => 0,
            "etat"=>[true,true]
         ],

         'champion' =>
         [
            "nom" => "",
            "drapeau" => ""
         ],

         '2eplace' =>
         [
            "nom" => "",
            "drapeau" => ""
         ]

      ]
   ];
}
