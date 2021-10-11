<?php
//Creare un array con 15 numeri casuali (da 1 a 100), tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
$randomNum = [];

while(count($randomNum) < 15){
    $newNum = rand(1,100);
    if(!in_array($newNum, $randomNum)){
        $randomNum[] = $newNum;
    }
} 
var_dump($randomNum);
?>