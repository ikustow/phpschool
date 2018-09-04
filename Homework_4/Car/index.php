<?php
require_once("Car.php");
const MANUAL = "Ручная"; // Ручная коробка
const AUTO = "Автоматическая";   // Автоматическая
const FORWARD = "Вперед"; // едем вперед
const BACK = "Назад"; // едем назад

$Optima = new Kia(0, FORWARD, 500, MANUAL, 0, 12);
