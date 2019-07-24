<?php

$money = 1000;


function buyJollibeeChicken() {
	global $money;
	$money -= 90;
}

function buyCokeFloat() {
	global $money;
	$money -= 50;
}

function buyClothes() {
	$GLOBALS['money'] -=400;
}

function checkMoney() {
	echo "{$GLOBALS['money']} </br>";
}

buyJollibeeChicken();
buyCokeFloat();
buyClothes();
checkMoney();
