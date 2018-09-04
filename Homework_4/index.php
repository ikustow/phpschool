<?php
require_once("Car/Kia.php");

const MANUAL = "Ручная";
const AUTO = "Автоматическая";
const FORWARD = "Вперед";
const BACK = "Назад";

$optima = new kia(0, FORWARD, 500, MANUAL, 0, 12);
