<html>
<head>
<title>Форма заявки с сайта</title>
</head>
<body>

<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$message = htmlspecialchars($message);

$name = urldecode($name);
$phone = urldecode($phone);
$message = urldecode($message);

$name = trim($name);
$phone = trim($phone);
$message = trim($message);

// echo $name;
// echo "<br>";
// echo $phone;
// echo "<br>";
// echo $message;

if (mail("larisa.k.01@bk.ru", "Заказ с сайта", "name".$name.". phone: ".$phone ,"From: llogosov@mail.ru \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";

}?>
</body>
</html>