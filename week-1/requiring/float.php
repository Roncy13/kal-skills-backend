<?php

include('./add.php');

$x = 10.35;
$y = 5.3;

$sum = add(x, y);

echo "{$sum} </br>";

$sum += 5.7;

echo "{$sum} </br>";

$sum += 10.2;

echo "{$sum} </br>";


$sum++;

echo "{$sum} </br>";

$sum--;

echo "{$sum} </br>";
?>