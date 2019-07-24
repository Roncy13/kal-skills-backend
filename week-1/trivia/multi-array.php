<?php

$array = array(
	array(
		"firstname" => "James",
		"lastname" => "Roncesvalles"
	),
	array(
		"firstname" => "Louie",
		"lastname" => "Roncesvalles"
	),
);

foreach($array as $key => $value) {
	echo "{$key} <br><br>";
	foreach($value as $index => $val) {
		echo "{$index}: {$val} <br>";
	}
}