<?php
$notes = [10,20,13];
// $notes[] = 16;
array_push($notes, 16, 17, 18);
$notesReverse  = sort($notes);
$sum = array_sum($notes);
$count = count($notes);
print_r($notes);
print_r($notesReverse);
// echo "Vous avez" . round($sum / $count, 2) . "de moyenne";
?>