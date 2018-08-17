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
echo $age;

if ($age >= 18 && $age <= 65){
 echo "Вам еще работать и работать";
} elseif ($age > 65) {
    echo "Вам пора на пенсию";
}elseif ($age >= 1 && $age <= 17){
 echo "Вам еще рано работать" ;
}elseif($age > 99){
  echo "Неизвестное число";
}

echo "\n<- End task 3";