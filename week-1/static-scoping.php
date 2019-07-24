<?php

function starting() {
	static $money = 100;
	$money = buyBenteLog($money);
	checkMoney($money);
}

function buyBenteLog($money) {
	return $money -= 20;
}

function checkMoney($money) {
	echo $money . " </br>";
}


starting();
starting();
starting();
