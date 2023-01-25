<?php 
$a_bool = TRUE;
$a_str = "foo";
$a_str2 = 'foo';
$an_int = 12;


echo gettype($a_bool);
echo gettype($a_str);

// echo get_debug_type($an_int);

if(is_int($an_int)){
    $an_int += 4;
}
/*
if(!is_bool($a_str2)){
    // $a_str2
    echo"c'est vraiment ça";
}else{
    echo"c'est pas ";
}

*/
if (is_string($a_bool)) {
    echo 'String: $a_bool';
}


/* $a_bool = (is_string) ? echo "is tring" : echo "is not string" ;
// echo"" */

$decimalNumber = 1234;
$octaleNumber = 01234;
$hexadecimalNumber = 0x1A;
$binarryNumber = 0b11111111;
$decimalNUmber = 1_234_567;

$prenom = "Annette";
$nom = "Bwemere";

echo $prenom;


?>