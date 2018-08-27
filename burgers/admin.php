<?php
$host="localhost";
$user="root";
$pass=""; //установленный вами пароль
$db_name="burgershop";
$db_table = "Users";
$mysqli = new mysqli($host, $user, $pass, $db_name);
$result = $mysqli->query("SELECT * FROM  Users ");

echo "Данные по клиентам:";
echo "<br>"."<br>";
echo "<table width='50%' border='1'>";
echo "<tr><td>ID</td><td>Client</td><td>Email</td><td>phone</td></tr>";
while($myrow = $result->fetch_assoc()) {
        $ID = $myrow['ID'];
        $Client=$myrow['client'];
        $Email=$myrow['email'];
        $phone=$myrow['phone'];
        echo "<tr><td>$ID</td><td>$Client</td><td>$Email</td><td>$phone</td></tr>";
    }
echo "</table>";


$result = $mysqli->query("SELECT * FROM  Orders ");

echo "<br>"."<br>";
echo "Данные заказов:";
echo "<br>"."<br>";
echo "<table width='50%' border='1'>";
echo "<tr><td>orderID</td><td>clientID</td><td>clientName</td><td>clientEmail</td></tr>";
while($myrow = $result->fetch_assoc()) {
    $orderID = $myrow['orderID'];
    $clientID=$myrow['clientID'];
    $clientName=$myrow['clientName'];
    $clientEmail=$myrow['clientEmail'];
    echo "<tr><td>$orderID</td><td>$clientID</td><td>$clientName</td><td>$clientEmail</td></tr>";
}
echo "</table>";
