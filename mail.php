<?php

$recepient = "agragregra@ya.ru";
$sitename = "Название сайта";

$name = trim($_POST["name"]);
$mail = trim($_POST["mail"]);
$phone = trim($_POST["phone"]);
$text = trim($_POST["text"]);
$message = "Имя: $name \nЭл.почта: $mail \nТелефон: $phone \nТекст: $text";

$pagetitle = "Заявка на игру ⚔️ \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
