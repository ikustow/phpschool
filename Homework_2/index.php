<?php
require("src/functions.php");
echo "=====Function 1=====";
echo "<br>";
echo "<br>";
$array = array("this", "is", "a", "string");
$allstring = false;
$a1 = task1($array, $allstring);

$allstring = true;
$a1 = task1($array, $allstring);
echo "$a1";
echo "<br>";
echo "<br>";
echo "=====Function 2=====";

