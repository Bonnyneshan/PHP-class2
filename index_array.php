<?php

echo "Method of Using Indexing Array <br>";

/*======================
  Indexing Array Start
======================*/

//Manually Calling value from Array

$myteam = array ("Mehraj", "Tushar", "Shofik", "Foisal");

echo "(1) $myteam[0] <br>";
echo "(2) $myteam[1] <br>";
echo "(3) $myteam[2] <br>";
echo "(4) $myteam[3] <br><br>";


//Automatically Calling value from Array by using (for loop)

$totalmember = count($myteam);

for ($i=0; $i < $totalmember; $i++) { 
  echo "($i) $myteam[$i] <br>";
}

/*=====================
  Indexing Array End
=====================*/

?>