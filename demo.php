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


// $ecrassement = [
//     1 => "annette",
//     "1" => "bwemere",
//     1.5 => "salama",
//     true => "Bwemere"

// ];
// var_dump($ecrassement)

// $string_Int = [
//     "name" => "annette",
//     "lastname" => "foo",
//     20 => "age",
//     -100 => 20,
// ];

// var_dump($string_Int[20]);
// var_dump($string_Int)


// $indexSansCles = (

//     "Ecole",
//     "Famille",
//     "Travail",
//     "Amie",
//     "Connaisance"
// );
// var_dump($indexSansClesinde);

// $array = array("foo", "bar", "hello", "world");
// var_dump($array);

// $array = array(
//     1    => 'a',
//     '1'  => 'b', // la valeur "a" sera écrasé par "b"
//     1.5  => 'c', // la valeur "b" sera écrasé par "c"
//     -1 => 'd',
//     '01'  => 'e', // comme ceci n'est pas une chaîne de caractère entière elle N'écrasera PAS la clé pour 1
//     '1.5' => 'f', // comme ceci n'est pas une chaîne de caractère entière elle N'écrasera PAS la clé pour 1
//     true => 'g', // la valeur "c" sera écrasé par "g"
//     false => 'h',
//     '' => 'i',
//     null => 'j', // la valeur "i" sera écrasé par "j"
//     'k', // la valeur "k" est assigné la clé 2. Ceci est du au fait que la dernière clé entière la plus grande utilisé auparavant était 1
//     2 => 'l', // la valeur "k" sera écrasé par "l"
// );
// var_dump($array);



// $notes = [
//     10,
//     20,
//     10,
//     9,
//     8,
//     'eleve'
// ];
// echo $notes[1];
// // echo $notes[5];

// $eleve = ['nom'=>'Annette', 'prenom'=>'Bwemere','notes'=> [10, 20, 30, 40]];
// $eleve['prenom'] = 'Jean';
// echo $eleve['prenom'] . ' ' . $eleve['nom'];


$classe = [
    [
        'nom' => 'Annete',
        'Prenom' => 'Bwemere',
        'notes' => [16, 12, 17],
    ],
    [
        'nom' => 'Arick',
        'Prenom' => 'Bulakali',
        'notes' => [12, 10, 11]
    ]

];

// echo $classe[1]['notes'][2]

$action = (int)readline('Entrez votre note:(1: "ATTQUER", 2:"DEFFENDRE", 3:"Passer à Action")');


switch($action){
    case 1:
        echo 'J\'Attaque !';
        break;
    case 2:
        echo 'Je Défend';
        break;
     case 3:
            echo 'Je ne fait Absolument Rien';
            break;
    default:
        echo 'Commande Inconuue';

}

if ($action === 1) {
    # code...
    echo 'J\'attaque!';
}elseif($action === 2){
    echo 'Je défends';
}
elseif($action === 3){
    echo 'Je ne fais Absolument rien';
}
else {
    # code...
    echo 'Commande INconnnue';
}

?>

