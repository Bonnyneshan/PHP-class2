<?php 

echo "Method of Using (or, and) <br>";

/*=======================
  Using (or, and) start
=======================*/

/*if (or) finds true any value from both it'll show true.
Olny when both value wrong it'll show wrong.*/

$username = "Motiur Rahman";
$password = 12345;

if (($username == "Neshan") || ($password == 12345)) {
	echo "Login successful";
} else {
	echo "Login not successful";
}

echo "<br><br>";

/*if (and) finds wrong any value from both it'll show wrong.
Olny when both value true it'll show true.*/

if (($username == "Neshan") && ($password == 12345)) {
	echo "Congratulations";
} else {
	echo "Input valid username and password";
}

/*=====================
  Using (or, and) End
=====================*/

?>