<?php
//Запишем данные формы в переменные
require(__DIR__.'\function.php');
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
$address = $_POST['street'] . ", д." . $_POST['home'] . ", кор." . $_POST['part'] . ", кв." . $_POST['appt'] . ", эт." . $_POST['floor'];
$comment = $_POST['comment'];
$payment = $_POST['payment'];
$callback = $_POST['callback'];

$formData = array(
    "name" => $name,
    "phone" => $phone,
    "email" => $email
);
$orderData = array(
    "comment" => $comment,
    "payment" => $payment,
    "callback" => $callback,
    "address" => $address
);

$userData = autorization($formData);

$orderid = 0;
$emailInfo = array();

$emailInfo = createorder($userData, $orderData, $orderid, $emailInfo);

sendemail($emailInfo["email"], $emailInfo["ordersCount"], $emailInfo["clientInfo"], $emailInfo["orderid"]);
