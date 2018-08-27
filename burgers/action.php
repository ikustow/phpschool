<?php
//Запишем данные формы в переменные
$name = $_POST['name'];
if (empty($name)) {
    $name = "Клиент";
}
$phone = $_POST['phone'];
$email = $_POST['email'];
if (empty($email)) {
    echo "Для заказа, введите почту!";
    die;
}
$address = $_POST['street'].", д.".$_POST['home'].", кор.".$_POST['part'].", кв.".$_POST['appt'].", эт.".$_POST['floor'];
$comment = $_POST['comment'];
$firstvisit = false;

$host="localhost";
$user="root";
$pass=""; //установленный вами пароль
$db_name="burgershop";
$db_table = "Users";
$mysqli = new mysqli($host, $user, $pass, $db_name);

// Ищем по почте
$result = $mysqli->query("SELECT ID,client,email,orders,phone,address FROM  Users  WHERE email = '$email'");
$result = $result->fetch_assoc();
if ( empty($result) ) {
    $result = $mysqli->query("INSERT INTO Users (client,email,orders,phone,address) VALUES ('$name','$email',1,'$phone','$address')");
    $firstvisit = true;
    createorder($result);
    sendemail();
} else {
    $clientID = $result['ID'];
    $orders = $result['orders'] + 1;
    $mysqli->query("UPDATE Users SET orders ='$orders' WHERE ID = '$clientID'");

    createorder($result);
}
function createorder($result)
{
    $host = "localhost";
    $user = "root";
    $pass = ""; //установленный вами пароль
    $db_name = "burgershop";
    $db_table = "Users";
    $mysqli = new mysqli($host, $user, $pass, $db_name);
    $orderclientID = $result['ID'];
    $orderclientname = $result['client'];
    $orderclientemail = $result['email'];
    $mysqli->query("INSERT INTO Orders (clientID,clientEmail,clientName) VALUES ('$orderclientID','$orderclientemail','$orderclientname')");
}

function sendemail()
{

}
