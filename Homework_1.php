<?php
//Задание 1
echo "task 1 ->\n";

$name = "Илья";
$age = "28";
echo "\"Меня зовут: $name\"\n\"Мне $age лет\"\n";
echo  "“!|\/’”\\";
echo "\n<- End task 1";

//Задание 2
echo "\ntask 2 ->\n";

const ALLPIC = 80;
const FLOMPIC = 23;
const PENCPIC = 40;
const DRAW = ALLPIC - FLOMPIC - PENCPIC;

echo DRAW;

echo "\n<- End task 2";

//Задание 3

echo "\ntask 3 ->\n";

$age = mt_rand(1, 99);
//echo $age;

if ($age >= 18 && $age <= 65){
 echo "Вам еще работать и работать";
} elseif ($age > 65) {
    echo "Вам пора на пенсию";
} elseif ($age >= 1 && $age <= 17){
 echo "Вам еще рано работать" ;
} else {
    echo "Неизвестное число";
}

echo "\n<- End task 3";

//Задание 4

echo "\ntask 4 ->\n";

$day = mt_rand(1, 10);
switch ($day) {
    case 0:
    case 1:
    case 2:
    case 4:
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}

echo "\n <- End task 4";

//Задание 5
echo "\ntask 5 ->\n";

$bmw = array(
    "model" => "x5",
    "speed" => "120",
    "doors"=> "5",
    "year"  => "2015",
);
$toyota = array(
    "model" => "Camry",
    "speed" => "180",
    "doors" => "5",
    "year"  => "2017",
);
$opel = array(
    "model" => "Astra",
    "speed" => "150",
    "doors" => "3",
    "year"  => "2010",
);

$cars["bmw"] = $bmw;
$cars["toyota"] = $toyota;
$cars["opel"] = $opel;


print_r ($cars);

echo "\n <- End task 5";