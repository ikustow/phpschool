<?php
require(__DIR__.'\SQLconnect.php');
function autorization($formdataarray)
{
    $mysqli = connect();

    $name = $formdataarray['name'];
    $email = $formdataarray['email'];
    $phone = $formdataarray['phone'];
    $address = $formdataarray['address'];

    $usersqueryresult = $mysqli->query("SELECT ID,client,email,orders,phone,address FROM  Users  WHERE email = '$email'");
    $usersassocarray = $usersqueryresult->fetch_assoc();
    if (empty($usersassocarray)) {
        $mysqli->query("INSERT INTO Users (client,email,orders,phone,address) VALUES ('$name','$email',0,'$phone','$address')");
        $usersqueryresult = $mysqli->query("SELECT ID,client,email,orders,phone,address FROM  Users  WHERE email = '$email'");
        $usersassocarray = $usersqueryresult->fetch_assoc();

        return $usersassocarray;

    } else {
        $clientID = $usersassocarray['ID'];
        $orders = $usersassocarray['orders'] + 1;
        $mysqli->query("UPDATE Users SET orders ='$orders' WHERE ID = '$clientID'");  //Добавляем заказ к общему количеству
        return $usersassocarray;
    }
}

function createorder_and_sendemail($userdata, $orderdata, $orderid)
{
    //print_r($userdata);
    $orderclientID = $userdata['ID'];
    $orderclientname = $userdata['client'];
    $orderclientemail = $userdata['email'];
    $comment = $orderdata['comment'];
    $payment = $orderdata['payment'];
    $callback = $orderdata['callback'];
    $address = $orderdata['address'];
    $orderscount = $userdata['orders'];

    $mysqli = connect();

    $mysqli->query("INSERT INTO Orders (clientID,clientEmail,clientName,сomment,paymant,address,callback) VALUES ('$orderclientID','$orderclientemail','$orderclientname','$comment','$payment','$address','$callback')");

    $orderid = mysqli_insert_id($mysqli);

    sendemail($orderclientemail, $orderscount, $orderdata, $orderid);
}

function sendemail($orderclientemail, $orderscount, $clientinfo, $orderid)
{
    $to = $orderclientemail;
    $subject = 'Заказ с сайта burgers.ru';
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $orderscount = $orderscount+1;

    $message = generatemessage($clientinfo, $orderid, $orderscount);

    $sendsucsess = mail($to, $subject, $message, $headers);

    if ($sendsucsess) {
        echo "Ваш заказ оформлен! На указанный e-mail: ".$to." отправлено письмо";
    } else {
        echo "Произошла ошибка отправки";
    }
}

function generatemessage($clientinfo, $orderid, $orderscount)
{
    if ($orderscount > 1) {
        $endrow = 'Спасибо! Это уже ' . $orderscount . ' заказ!';
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
  <p>'.$clientinfo['address'].'</p>
  <p>Заказ - DarkBeefBurger за 500 рублей, 1 шт</p>
  <p>'.$endrow.'</p>  
</body>
</html>
';
    return $message;
}