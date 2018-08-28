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
    $result = $mysqli->query("SELECT ID,client,email,orders,phone,address FROM  Users  WHERE email = '$email'");
    $result = $result->fetch_assoc();

    $firstvisit = true;
    createorder($result);

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
    $neworderid = mysqli_insert_id($mysqli);
    sendemail($result,$neworderid);
}

function sendemail ($clientinfo, $orderid)
{
    $to = $clientinfo['email'];
    $address = $_POST['street'] . ", д." . $_POST['home'] . ", кор." . $_POST['part'] . ", кв." . $_POST['appt'] . ", эт." . $_POST['floor'];
// тема письма
    $subject = 'Заказ с сайта burgers.ru';
    $orderscount = $clientinfo['orders'];
// текст письма
    if ($orderscount > 1) {
        $message = '
<html>
<head>
  <title>Заказ номер {orderid}</title>
</head>
<body>
  <p>Ваш заказ будет доставлен по адресу:”</p>
  <p>{address}</p>
  <p>Заказ - DarkBeefBurger за 500 рублей, 1 шт</p>
  <p>Спасибо! Это уже {$orderscount} заказ!</p>  
</body>
</html>
';
    } else {
        $message = '
<html>
<head>
  <title>Заказ номер {orderid}</title>
</head>
<body>
  <p>Ваш заказ будет доставлен по адресу:”</p>
  <p>{address}</p>
  <p>Заказ - DarkBeefBurger за 500 рублей, 1 шт</p>
  <p>Спасибо! Это ваш первый заказ!</p>  
</body>
</html>
';
    }

   // $headers = 'MIME-Version: 1.0' . "\r\n";
  //  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Отправляем
   mail($to, $subject, $message);

    echo "Ваш заказ оформлен! На указанный e-mail отправлено письмо";
}
