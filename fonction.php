<?php


// $nom = "Doe";
// function bonjour ($prenom = null ,$nom = null){
//     global $nom;
//     if($prenom === null){
//         return "Bonjour\n";
//     }
//     return 'Bonjour' . $prenom . " " . $nom . "\n";
// }
// ;

// echo bonjour("Annette", $nom);


function repondre_oui_nom($phrase){
    while(true){

        $reponse = readline($phrase . "(o)oui/(n)no");
        if($reponse === "o"){
              return true;
        }elseif($reponse === "n"){
              return false;
        }
      }
      ;
    }


    function demander_creneau($phrase = "veuillez entrer un creaeaux"){
      echo $phrase . "\n";
      while(true){

            $ouverture = (int)readline("Heure d'\ouverture : ");
            if($ouverture >= 0 && $ouverture <= 23){
                  break;

            }
      }
      ;

      while(true){

            $fermeture = (int)   readline("Heure de fermeture : ");
            if($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture){
                  break;
            }
      }
      return [$ouverture, $fermeture];
}
;

// $resultat = repondre_oui_nom("Voulez vous continuer?");
$creneaux = demander_creneau();
$creneaux2 = demander_creneau("Veuillez entrer votre crenaux");

var_dump($creneaux, $creneaux2);


?>