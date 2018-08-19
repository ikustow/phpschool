<?php
//Задание 1
echo "<br>";
echo "task 1 ->\n";
echo "<br>";
echo "<br>";
$name = "Илья";
$age = "28";
echo "\"Меня зовут: $name\"";
echo "<br>";
echo "\"Мне $age лет\"";
echo "<br>";
echo "<br>";
echo "“!|\/’”\\";
echo "<br>";
echo "<br>";
echo "\n<- End task 1";
echo "<br>";
echo "<br>";
//Задание 2
echo "\ntask 2 ->\n";
echo "<br>";
echo "<br>";
const ALLPIC = 80;
const FLOMPIC = 23;
const PENCPIC = 40;
const DRAW = ALLPIC - FLOMPIC - PENCPIC;
echo "<br>";
echo DRAW;
echo "<br>";
echo "<br>";
echo "\n<- End task 2";
echo "<br>";
echo "<br>";
//Задание 3

echo "\ntask 3 ->\n";
echo "<br>";
echo "<br>";
$age = mt_rand(1, 99);
//echo $age;

if ( $age >= 18 && $age <= 65 ) {
    echo "<br>";
    echo "Вам еще работать и работать";
} elseif ( $age > 65 ) {
    echo "<br>";
    echo "Вам пора на пенсию";
} elseif ( $age >= 1 && $age <= 17 ) {
    echo "<br>";
    echo "Вам еще рано работать";
} else {
    echo "<br>";
    echo "Неизвестное число";
}
echo "<br>";
echo "<br>";
echo "\n<- End task 3";
echo "<br>";
echo "<br>";
//Задание 4

echo "\ntask 4 ->\n";
echo "<br>";
$day = mt_rand(1, 10);
switch ($day) {
    case 0:
    case 1:
    case 2:
    case 4:
    case 5:
        echo "<br>";
        echo "Это рабочий день";
        break;
    case 6:
    case 7:
        echo "<br>";
        echo "Это выходной день";
        break;
    default:
        echo "<br>";
        echo "Неизвестный день";
}
echo "<br>";
echo "<br>";
echo "\n <- End task 4";
echo "<br>";
//Задание 5
echo "<br>";
echo "\ntask 5 ->\n";
echo "<br>";
$bmw = array(
    "model" => "x5",
    "speed" => "120",
    "doors" => "5",
    "year" => "2015",
);
$toyota = array(
    "model" => "Camry",
    "speed" => "180",
    "doors" => "5",
    "year" => "2017",
);
$opel = array(
    "model" => "Astra",
    "speed" => "150",
    "doors" => "3",
    "year" => "2010",
);

$cars["bmw"] = $bmw;
$cars["toyota"] = $toyota;
$cars["opel"] = $opel;

echo "<br>";
//print_r ($cars);
foreach ($cars as $key => $value) {
    echo "<br>";
    echo " CAR $key ";
    echo "<br>";
    echo "$value[model] $value[speed] $value[doors] $value[year] ";
    echo "<br>";
}
echo "<br>";
echo "\n <- End task 5";