<?php
$name=$_POST['name'];
$email=$_POST['email'];
$theme=$_POST['theme'];
$theme=mb_convert_encoding ($theme, "windows-1251", "utf-8" );

$message=$_POST['message'];
$message=mb_convert_encoding ($message, "windows-1251", "utf-8" );
$email=mb_convert_encoding ($email, "windows-1251", "utf-8" );

mail("sined@hotmail.ru", $theme, $message,
    "From: $email \r\n"
    ."Content-type: text/html; charset=windows-1251");
?>