<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    $file = $_POST['file'];

	$to = "janbolot120103@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n
    Почта: $email /n
    Текст: $text /n
    Файл: $file";
	mail($to, $subject, $msg, "From: $to ");

?>

<p>Привет, форма отправлена</p>
