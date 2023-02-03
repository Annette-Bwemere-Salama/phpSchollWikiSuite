<?php 

function bonjour ($prenom = null){
    if($prenom === null){
        return "Bonjour\n";
    }
    return 'Bonjour' . $prenom . "\n";
}
;
echo bonjour();
echo bonjour("Annette Bwemere");

?>