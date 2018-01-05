<?php

$name = $_POST['name'];
$name = htmlspecialchars($name);
$name = urldecode($name);
$name = trim($name);

$sername = $_POST['sername'];
$sername = htmlspecialchars($sername);
$sername = urldecode($sername);
$sername = trim($sername);

$email = $_POST['email'];
$email = htmlspecialchars($email);
$email = urldecode($email);
$email = trim($email);

$phone = $_POST['phone'];
$phone = htmlspecialchars($phone);
$phone = urldecode($phone);
$phone = trim($phone);


if (mail("bachura95@gmail.com", "Вернем деньги", "Имя: ".$name. "\nФамилия: ".$sername. "\nE-mail: ".$email. "\nТелефон: ".$phone , "From: bachura95@gmail.com \r\n"))
	{	
		header("Location: http://glopart.ru/buy/182311");
	} else { 
		echo "при отправке сообщения возникли ошибки";
	}
?>