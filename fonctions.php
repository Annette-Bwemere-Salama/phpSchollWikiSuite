<?php
// $notes = [10,20,13];
// $notes2 = $notes;
// $notes2[] = 10;
// var_dump($notes, $notes2);
// $notes[] = 16;
// array_push($notes, 16, 17, 18);
// $notesReverse  = sort($notes);
// $sum = array_sum($notes);
// $count = count($notes);
// print_r($notes);
// print_r($notesReverse);
// echo "Vous avez" . round($sum / $count, 2) . "de moyenne";

// while(true){
//     $mot = readline('Entrez votre mot:');
//     if($mot === ""){
//         exit("Fin du programme");
//     }
//     $renverse = strrev($mot);
//     if(strtolower($mot) === $renverse){
//         echo "Ce mot est un plalindrome";
//     }else{
//         echo "c'est mot ne pas palidrome";
//     }
// }

$insultes = ['merde', 'con', 'baiseur de pote'];
$asterisques = [];
foreach ($insultes as $insulte) {
    $lettre = substr($insulte, 0, 1);
    $asterisques[] =$lettre . str_repeat('*', strlen($insulte) -1);
}
$phrase = readline("Entrez une phrase :");
$phrase = str_replace($insultes, $asterisques, $phrase);
// foreach($insultes as $insulte){
//     $replace = str_repeat('*', strlen($insulte));
//     $phrase = str_replace($insulte, $replace, $phrase);
// }
// $phrase = str_replace($insultes, ['******', '****'], $phrase);


echo $phrase;
?>