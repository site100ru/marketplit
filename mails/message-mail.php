<?php
	session_start();
	$win = "true";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mes = $_POST['mes'];

	// mail("sidorov-vv3@mail.ru, vasilyev-r@mail.ru", "Сообщение с сайта interflat-spb.ru", "
	mail("1752800@mail.ru, vasilyev-r@mail.ru", "Сообщение с сайта interflat-spb.ru", "
		Клиент: ".$name."\n
		Email: ".$email."\n
		Сообщение: ".$mes."\n
	" );
	$_SESSION['win'] = 1;
	$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в компанию «Маркет мебельной плиты». Мы ответим Вам в&#160;ближайшее время.</p>';
	header("Location: ".$_SERVER['HTTP_REFERER']);
?>