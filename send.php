<?php

$name = $_POST['name'];
$name = htmlspecialchars($name);
$name = urldecode($name);
$name = trim($name);

$email = $_POST['email'];
$email = htmlspecialchars($email);
$email = urldecode($email);
$email = trim($email);

$message = $_POST['message'];
$message = htmlspecialchars($message);
$message = urldecode($message);
$message = trim($message);


if (mail("new.lead2017new@gmail.com", "Вернем деньги", "Имя: ".$name. "\nE-mail: ".$email. "\nСообщение: " .$message , "From: new.lead2017new@gmail.com \r\n"))
	{	echo "Сообщение отправлено, все хорошо!";
		header("Location: ./index.html");
	} else { 
		echo "при отправке сообщения возникли ошибки";
	}


?>
