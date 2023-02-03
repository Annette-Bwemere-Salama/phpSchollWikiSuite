<?php


$nom = "Doe";
function bonjour ($prenom = null ,$nom = null){
    global $nom;
    if($prenom === null){
        return "Bonjour\n";
    }
    return 'Bonjour' . $prenom . " " . $nom . "\n";
}
;

echo bonjour("Annette", $nom);

?>