<?php

$mangoes = array("apple", "mango", "ponkan", "pakwan");

// get the length of the mangoes
// then loop it in the for loop

$length = count($mangoes);

for($x= 0; $x < $length; $x++) {
	echo "{$mangoes[$x]} <br>";
}

foreach ($mangoes as $key => $value) {
	echo "key: {$key} value: {$value} <br>"; 
}
?>