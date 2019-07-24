<?php 

function add($x, $y) {
	return $x + $y;
}

function minus($x, $y) {
	return $x - $y;
}

function times($x, $y) {
	return $x * $y;
}

function divide($x, $y) {
	return $x / $y;
}

function printValue($value) {
	echo "{$value}";
	enter();
}

function enter() {
	echo "</br>";
}

$sum = add(10 , 5);
$minus = minus(10, 5);
$times = times(10, 5);
$divide = divide(10, 5);

echo printValue($sum);
echo printValue($minus);
echo printValue($times);
echo printValue($divide);

?>