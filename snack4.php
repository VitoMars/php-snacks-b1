

<?php
// Snack 4
// Creare un array con 15 numeri casuali ( da 1 a 100), tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

$array = [];

for ($i = 0; $i < 15; $i++) {
   array_push($array, rand(1, 100));
}

var_dump($array);
?>