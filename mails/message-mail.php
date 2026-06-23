<?php
	session_start();
	$win = "true";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mes = $_POST['mes'];

	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "From: info@marketplit.ru\r\n";
	$headers .= "Reply-To: info@marketplit.ru\r\n";
	$headers .= "Return-Path: info@marketplit.ru\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";

	// mail("sidorov-vv3@mail.ru, vasilyev-r@mail.ru", "Сообщение с сайта interflat-spb.ru", "
	mail("1752800@mail.ru, vasilyev-r@mail.ru", "Сообщение с сайта interflat-spb.ru", "
		Клиент: ".$name."<br>
		Email: ".$email."<br>
		Сообщение: ".$mes."<br>
	", $headers );
	$_SESSION['win'] = 1;
	$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в компанию «Маркет мебельной плиты». Мы ответим Вам в&#160;ближайшее время.</p>';
	header("Location: ".$_SERVER['HTTP_REFERER']);
?>