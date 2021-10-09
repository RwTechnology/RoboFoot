<?php
    // tableau des equipes
    $equipe=["Brésil","Argentine", " France","Italie","Espagne", "Allemagne","Portugal","Haïti"];

    // tableau des drapeau
        $drapeau=[
                 "./assets/image/drapeau/bresil.webp",
                 "./assets/image/drapeau/argentine.webp",
                 "./assets/image/drapeau/france.webp",
                 "./assets/image/drapeau/italie.webp",
                 "./assets/image/drapeau/espagne.webp",
                 "./assets/image/drapeau/allemagne.webp",
                 "./assets/image/drapeau/portugal.png",
                 "./assets/image/drapeau/haiti.webp"
                ];

        // tirages et repartition 
        $indiceUnGroupeA=rand(0,1);
        $indiceUnGroupeB=rand(0,1);



        $indiceDeuxGroupeA=rand(2,3);
        $indiceDeuxGroupeB=rand(2,3);

        $indiceTroisGroupeA=rand(4,5);
        $indiceTroisGroupeB=rand(4,5);

        $indiceQuatreGroupeA=rand(6,7);
        $indiceQuatreGroupeB=rand(6,7);


        while($indiceUnGroupeA==$indiceUnGroupeB ) {   
            $indiceUnGroupeB=rand(0,1);
        }
              
        while($indiceDeuxGroupeA==$indiceDeuxGroupeB) {
                $indiceDeuxGroupeB =rand(2,3);
        }

           while($indiceTroisGroupeA==$indiceTroisGroupeB){
                    $indiceTroisGroupeB =rand(4,5);
                }

           while($indiceQuatreGroupeA ==$indiceQuatreGroupeB){ 
                    $indiceQuatreGroupeB=rand(6,7);
                }

                
                    // status des matchs pour acceder à un match et pour l'affichage des scores
                    $_SESSION['match1']=[true,false];
                    $_SESSION['match2']=[false,false];
                    $_SESSION['match3']=[false,false];
                    $_SESSION['match4']=[false,false];
                    $_SESSION['match5']=[false,false];
                    $_SESSION['match6']=[false,false];
                    $_SESSION['match7']=[false,false];
                    $_SESSION['match8']=[false,false];
                    $_SESSION['match9']=[false,false];
                    $_SESSION['match10']=[false,false];
                    $_SESSION['match11']=[false,false];
                    $_SESSION['match12']=[false,false];
                    $_SESSION['match13']=[true,false];
                    $_SESSION['match14']=[false,false];
                    $_SESSION['match15']=[true,false];
                    $_SESSION['match16']=[true,false];
?>