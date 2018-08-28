<?php
function connect()
{
    $host="localhost";
    $user="root";
    $pass="";
    $db_name="burgershop";
    $mysqli = new mysqli($host, $user, $pass, $db_name);
    return $mysqli;
}
