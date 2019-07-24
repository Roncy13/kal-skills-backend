<?php

$bool = 1;

if ($bool === true) {
	echo "true";
} else if ($bool === false) {
	echo "false";
} else if ($bool === 1) {
	echo "Number";
}
else {
	echo "cannot be identified";
}

echo "</br>";
// checking username password

$username = "james";
$password = "password";

function loggedIn() {
	echo "You are Logged in";
}

if ($username === "james" && $password = "james123") {
	loggedIn();
} else {
	echo "Sorry, Incorrect credentials";
}