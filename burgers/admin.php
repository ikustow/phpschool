<?php
require_once "core/View.php";
require_once 'C:\OSPanel\domains\localhost\homeworks\vendor\autoload.php';

$host="localhost";
$user="root";
$pass="";
$db_name="burgershop";
$db_table = "Users";
$mysqli = new mysqli($host, $user, $pass, $db_name);
$resultUsers = $mysqli->query("SELECT * FROM  users ");



$resultOrders = $mysqli->query("SELECT * FROM  orders ");

$view = new View();
$view->render('admin.html', ['users' => $resultUsers, 'orders' => $resultOrders]);
