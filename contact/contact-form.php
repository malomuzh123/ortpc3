<?php

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);

$address = "ortpc@ortpc-rostov.ru";
$sub = "Сообщение с сайта Ростовский ОРТПЦ";

$mes = "Сообщение с сайта Ростовский ОРТПЦ.\n
Имя отправителя: $name 
Электронный адрес отправителя: $email
Текст сообщения:
$message";


if (empty($bezspama))
{
$from = "Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
	header('Refresh: 5; URL=<<<Вставить ссылку после размещения на хосте>>>');
	echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо отправлено, через 5 секунд вы вернетесь на страницу Обратная связь</body>';}
else {
	header('Refresh: 5; URL=<<<Вставить ссылку после размещения на хосте>>>');
	echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо не отправлено, через 5 секунд вы вернетесь на страницу Обратная связь</body>';}
}
exit;
?>