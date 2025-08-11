<?php
	//ini_set('error_reporting', E_ALL);
	//ini_set('display_errors', 1);
	//ini_set('display_startup_errors', 1);
	session_start();
	$win = "true";
	
	// Вспомогательная функция для отправки почтового сообщения с вложением 
	function send_mail($to, $thm, $html, $path) {
		$fp = fopen($path,"r"); 
		
		/* Если нет файла */
		if ( !$fp ) { 
			print "Файл $path не может быть прочитан"; 
			exit(); 
		}

		$file = fread($fp, filesize($path)); 
		fclose($fp); 

		$boundary = "--".md5(uniqid(time())); // генерируем разделитель 

		$headers = "MIME-Version: 1.0\r\n";
		
		$headers .= "From: marketplit.ru\r\n";

		$headers .="Content-Type: multipart/mixed; boundary=\"$boundary\"\n"; 

		$multipart = "--$boundary\n";

		$kod = 'utf-8'; // или $kod = 'windows-1251 или koi8-r'; 

		$multipart .= "Content-Type: text/html; charset=$kod\n"; 

		$multipart .= "Content-Transfer-Encoding: Quot-Printed\n\n"; 

		$multipart .= "$html\n\n"; 

		$message_part = "--$boundary\n"; 

		$message_part .= "Content-Type: application/octet-stream\n"; 

		$message_part .= "Content-Transfer-Encoding: base64\n"; 

		$message_part .= "Content-Disposition: attachment; filename = \"".$path."\"\n\n"; 

		$message_part .= chunk_split(base64_encode($file))."\n"; 

		$multipart .= $message_part."--$boundary--\n"; 


		/**/
		if ( !mail( $to, $thm, $multipart, $headers ) ) { 
			echo "К сожалению, письмо не отправлено"; 
			exit();
		}
	}
	
	
	/* Если существует переменная POST, то
	if($_POST) {
		// Отправляем данные в Google
		function getCaptcha($SecretKey){
			$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response={$SecretKey}");
			$Return = json_decode($Response);
			return $Return;
		}
		
		print_r( $Return );
		
		// Принимаем данные обратно
		$Return = getCaptcha($_POST['g-recaptcha-response']);
		// Если вероятность робота более 0.5, то считаем отправителя человеком и выполняем отправку почты
		if( $Return->success == true && $Return->score > 0.05 ) { */
			
			
			//$name = $_POST['name'];
			//$tel = $_POST['tel'];
			//$mes = $_POST['mes'];
			
			$picture = "";
			// $mail_to = "vasilyev-r@mail.ru, 1752800@mail.ru"; // Адрес доставки почты
			$mail_to = "sidorov-vv3@mail.ru"; // Адрес доставки почты
			$thm = "Зявка на распил с сайта marketplit.ru"; // Тема письма
			
			$file_type = $_FILES['mail_file']['type'];
			$file_size = $_FILES['mail_file']['size'];
			
			// Используем, если отправка файла обязательная
			/* Если поле выбора вложения не пустое - закачиваем его на сервер
			if ( !empty( $_FILES['mail_file']['tmp_name'] ) and ( $file_type == 'image/png' OR  $file_type == 'image/jpeg' OR $file_type ==  'application/pdf' ) and ( $file_size < 5120000 ) ) { 
				// Закачиваем файл 
				$path = 'mail-img/'.$_FILES['mail_file']['name']; 
				if (copy($_FILES['mail_file']['tmp_name'], $path)) $picture = $path; 
			} else {
				$_SESSION['win'] = 1;
				$_SESSION['recaptcha'] = '<p class="text-light">Неправильный формат или размер файла. Файл должен быть в формате .jpg, .jpeg, .png или .pdf и размером не более 5 МБ. Пожалуйста повторите попытку.</p>';
				header("Location: ".$_SERVER['HTTP_REFERER']);
				exit();
			} */
			
			// Используем, если отправка файла НЕ обязательная
			// Если изображение есть то проверяем его на соответствие требованиям
			// Если нет изображение, то ничего не делаем
			if ( !empty( $_FILES['mail_file']['tmp_name'] ) ) { 
				if ( ( $file_type ==  'application/vnd.ms-excel' OR $file_type == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' ) and ( $file_size < 5120000 ) ) {
					// Закачиваем файл 
					$path = 'mail-img/'.$_FILES['mail_file']['name']; 
					if ( copy($_FILES['mail_file']['tmp_name'], $path) ) { $picture = $path; }
				} else {
					$_SESSION['win'] = 1;
					$_SESSION['recaptcha'] = '<p class="text-light">Вы пытаетесь загрузить неподходящий формат или размер файла. Файл должен быть в формате .xls или .xlsx и размером не более 5 МБ. Пожалуйста повторите попытку.</p>';
					header("Location: ".$_SERVER['HTTP_REFERER']);
					exit();
				}
			}
			
			
			/* Отправляем почтовое сообщение  */
			if ( empty( $picture ) ) {
				$headers = "MIME-Version: 1.0\r\n";
				$headers .= "From: marketplit.ru\r\n";
				$headers .= "Content-type: text/html; charset=utf-8\r\n";
				$msg = "
					<strong>Имя:</strong> ".$name."<br><br>
					<strong>Телефон:</strong> ".$tel."<br><br>
					<strong>Сообщение:</strong> ".$mes."<br><br>
				";
				mail( $mail_to, $thm, $msg, $headers );
			} else {
				$msg = "Заявка на распил.";
				send_mail($mail_to, $thm, $msg, $picture);
			}
			
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за Вашу заявку. Мы ответим Вам в&#160;ближайшее время.</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
		
		
		/* } else {
			// Иначе считаем отправителя роботом и выводим сообщение с просьбой повторить попытку
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
		}
	} */
?>