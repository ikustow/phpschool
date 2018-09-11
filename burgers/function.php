<?php
require(__DIR__.'\SQLconnect.php');
require_once $_SERVER['DOCUMENT_ROOT'].'\homeworks\vendor\autoload.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\homeworks\vendor\swiftmailer\swiftmailer\lib\swift_required.php';
function autorization($formData)
{
    $mysqli = connect();

    $name = $formData['name'];
    $email = $formData['email'];
    $phone = $formData['phone'];
    $address = $formData['address'];

    $usersQueryResult = $mysqli->query("SELECT ID,client,email,orders,phone,address FROM  users  WHERE email = '$email'");
    $users = $usersQueryResult->fetch_assoc();
    if (empty($users)) {
        $mysqli->query("INSERT INTO users (client,email,orders,phone,address) VALUES ('$name','$email',0,'$phone','$address')");
        $usersQueryResult = $mysqli->query("SELECT ID,client,email,orders,phone,address FROM  users  WHERE email = '$email'");
        $users = $usersQueryResult->fetch_assoc();
        sendRegEmail($users);
        return $users;
    } else {
        $clientID = $users['ID'];
        $orders = $users['orders'] + 1;

        $mysqli->query("UPDATE users SET orders ='$orders' WHERE ID = '$clientID'");  //Добавляем заказ к общему количеству
        return $users;
    }
}

function sendRegEmail($userInfo){

    $transport = (new Swift_SmtpTransport('smtp.yandex.ru', 465,'ssl'))
        ->setUsername('ikustow@yandex.ru')
        ->setPassword('Ak2137345')
    ;

     $mailer = new Swift_Mailer($transport);

     $message = (new Swift_Message('Welcome'))
        ->setFrom(['ikustow@yandex.ru' => 'Burger Shop'])
        ->setTo(['ikustow@yandex.ru' => 'A name'])
        ->setBody('Спасибо за регистрацию!')
    ;

    $result = $mailer->send($message);
    return $result;


}

function createorder($userData, $orderData, $orderid, $emailInfo)
{
    //print_r($userData);
    $orderClientID = $userData['ID'];
    $orderClientName = $userData['client'];
    $orderClientEmail = $userData['email'];
    $comment = $orderData['comment'];
    $payment = $orderData['payment'];
    $callback = $orderData['callback'];
    $address = $orderData['address'];
    $ordersCount = $userData['orders'];


    $mysqli = connect();

    $mysqli->query("INSERT INTO orders (clientID,clientEmail,clientName,сomment,payment,address,callback) VALUES ('$orderClientID','$orderClientEmail','$orderClientName','$comment','$payment','$address','$callback')");

    $orderid = mysqli_insert_id($mysqli);

    return  $emailInfo = array(
        "email" => $orderClientEmail,
        "ordersCount" => $ordersCount,
        "clientInfo" => $orderData,
        "orderid" => $orderid);
}

function sendemail($orderClientEmail, $ordersCount, $clientInfo, $orderid)
{
    $to = $orderClientEmail;
    $subject = 'Заказ с сайта burgers.ru';
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $ordersCount = $ordersCount+1;

    $message = generatemessage($clientInfo, $orderid, $ordersCount);

    $sendSucsess = mail($to, $subject, $message, $headers);

    if ($sendSucsess) {
        echo "Ваш заказ оформлен! На указанный e-mail: ".$to." отправлено письмо";
    } else {
        echo "Произошла ошибка отправки";
    }
}

function generatemessage($clientInfo, $orderid, $ordersCount)
{
    if ($ordersCount > 1) {
        $endrow = 'Спасибо! Это уже ' . $ordersCount . ' заказ!';
    } else {
        $endrow = 'Спасибо! Это ваш первый заказ!';
    }
    $message = '<html>
<head>
  <title>Заказ номер '.$orderid.'</title>
</head>
<body>
  <p>Заказ номер '.$orderid.'</p>
  <p>Ваш заказ будет доставлен по адресу:</p>
  <p>'.$clientInfo['address'].'</p>
  <p>Заказ - DarkBeefBurger за 500 рублей, 1 шт</p>
  <p>'.$endrow.'</p>  
</body>
</html>
';
    return $message;
}
