<?php 

require('./../printLine.php');
//while

printLine('While');
$x = 1; 

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
} 

printLine('Do While');

//do while

$x = 1; 

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);


$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?>