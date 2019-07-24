<?php

function hi() {
	echo "hi </br>";
}

function hello() {
	echo "hello </br>";
}


function hey() {
	echo "hey </br>";
}


$array = array("hi", "hello", "hey");

foreach($array as $value) {
	$value();
}