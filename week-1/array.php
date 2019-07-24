<?php

$oneDime = array(
	"Mango",
	"Apple",
	"Grapes"
);

var_dump($oneDime);

$twoDime = array(
	array("apple", "mango"),
	array("white", "blue")
);

echo "<br>";

print_r($twoDime);

echo "<br>";

echo $twoDime[0][1];

echo "<br>";

$keyValue = array(
	"firstName" => "James",
	"lastName" => "Roncesvalles"
);

echo "</br>";

print_r($keyValue);

echo $keyValue["firstName"];


?>