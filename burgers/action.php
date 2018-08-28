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

$formdataarray = array(
    "name" => $name,
    "phone" => $phone,
    "email" => $email
);
$orderdata = array(
    "comment" => $comment,
    "payment" => $payment,
    "callback" => $callback,
    "address" => $address
);

$userdata = autorization($formdataarray);


$orderid = 0;

createorder_and_sendemail($userdata, $orderdata, $orderid);
