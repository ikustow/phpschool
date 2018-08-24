<?php
require("src/functions.php");
echo "=====Function 1=====";

echo "<br>";
$array = array("this", "is", "a", "string");
$allstring = false;
$a1 = task1($array, $allstring);

$allstring = true;
$a1 = task1($array, $allstring);
echo "$a1";
echo "<br>";

echo "=====Function 2=====".PHP_EOL;

echo "<br>";
//$args = array("+",1, 2, 4, 5.6);
$mix_func_result = task2("+", 1, 2, 4, 5.6);
echo $mix_func_result;
echo "<br>";

echo "=====Function 3=====".PHP_EOL;

echo "<br>";
$row=6;
$col=6;
task3($row, $col);
echo "<br>";

echo "=====Function 4=====".PHP_EOL;

echo "<br>";
$date1 = task4_1();
echo $date1;
echo "<br>";
$unixtime = task4_2();
echo "<br>";
echo $unixtime;
echo "<br>";

echo "=====Function 5=====".PHP_EOL;

echo "<br>";
$string_f4 =  "Карл у Клары украл Кораллы";
$delsymbol = task5_1($string_f4);
echo $delsymbol;
echo "<br>";

$string =  "Две бутылки лимонада";
$replaceword = task5_2($string);
echo $replaceword;
echo "<br>";

echo "=====Function 6=====".PHP_EOL;
echo "<br>";
$file = "data.txt";

if (!file_exists($file)) {
    $fp = fopen($file, "w");
    fwrite($fp, "Hello again!");
    fclose($fp);
}
task6($file);
