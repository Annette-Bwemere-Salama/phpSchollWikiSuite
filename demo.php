<?php
    $prenom = "Annette";
    $nom = "Bwemere";
    $note1 = 10;
    $note2 = 20;
    $moyenne = ($note1 + $note2) / 2;
    // echo "\nBonjour $prenom\n$nom Vous avez eu $moyenne"
$mon_identité = [
    "nom" => "Annette",
    "prenom" => "Bwemere",
    "postnom" => "Salama",
    "Age" => 20,
    "genre"=>"feminin",
    "nationalité"=>"congolaise",
    
];
// echo $mon_identité["nom"];
// echo $mon_identité["prenom"];
// echo $mon_identité["postnom"];
// echo $mon_identité["Age"];
// echo $mon_identité["genre"];
// echo $mon_identité["nationalité"];
// echo $mon_identité["nationalité"];
var_dump($mon_identité["nationalité"]);
// var_dump($mon_identité)

// echo $mon_identité["nom"];

$ecrassement = [
    1 => "annette",
    "1" => "bwemere",
    1.5 => "salama",
    true => "Bwemere"

];
// var_dump($ecrassement)

$string_Int = [
    "name" => "annette",
    "lastname" => "foo",
    20 => "age",
    -100 => 20,
];

var_dump($string_Int[20]);
var_dump($string_Int)


?>

