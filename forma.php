<?php
$to = "my-mailbox-2012@mail.ru";
$tema = "СК РАЗВИТИЕ"; // тема полученного емайла 
$message .= "Телефон/Почта: ".$_POST['mask-320']."<br>";
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
header('Location: ');
?>