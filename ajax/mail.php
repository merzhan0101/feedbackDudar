<?php 
    //чтоб принять данные
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $subject = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?=";//тема сообщения
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";//кому, от кого, тип контента, кодировка

    $success = mail("merzhan0101@mail.ru", $subject, $message, $headers);
    echo $success;

?>