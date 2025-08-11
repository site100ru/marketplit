<?php
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	session_start();
	
	// ОТЛАДКА - выводим всё что получили
	echo "<h3>DEBUG INFO:</h3>";
	echo "<pre>";
	echo "POST данные:\n";
	print_r($_POST);
	echo "\nFILES данные:\n";
	print_r($_FILES);
	echo "</pre>";
	
	$win = "true";
	
	// Вспомогательная функция для отправки почтового сообщения с вложением 
	function send_mail($to, $thm, $html, $path) {
		$fp = fopen($path,"r"); 
		
		/* Если нет файла */
		if ( !$fp ) { 
			echo "Файл $path не может быть прочитан"; 
			exit(); 
		}

		$file = fread($fp, filesize($path)); 
		fclose($fp); 

		$boundary = "--".md5(uniqid(time())); // генерируем разделитель 

		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "From: marketplit.ru\r\n";
		$headers .="Content-Type: multipart/mixed; boundary=\"$boundary\"\n"; 

		$multipart = "--$boundary\n";
		$kod = 'utf-8'; 
		$multipart .= "Content-Type: text/html; charset=$kod\n"; 
		$multipart .= "Content-Transfer-Encoding: Quot-Printed\n\n"; 
		$multipart .= "$html\n\n"; 

		$message_part = "--$boundary\n"; 
		$message_part .= "Content-Type: application/octet-stream\n"; 
		$message_part .= "Content-Transfer-Encoding: base64\n"; 
		$message_part .= "Content-Disposition: attachment; filename = \"".$path."\"\n\n"; 
		$message_part .= chunk_split(base64_encode($file))."\n"; 
		$multipart .= $message_part."--$boundary--\n"; 

		if ( !mail( $to, $thm, $multipart, $headers ) ) { 
			echo "К сожалению, письмо не отправлено"; 
			exit();
		} else {
			echo "Письмо с файлом отправлено успешно!<br>";
		}
	}
	
	// Если существует переменная POST, то
	if($_POST){
		echo "<p style='color: green;'>POST запрос получен!</p>";
		
		$picture = "";
		$mail_to = "vasilyev-r@mail.ru, sidorov-vv3@mail.ru"; 
		$thm = "Заявка на распил с сайта marketplit.ru"; 
		
		// Проверяем что файл был загружен
		if (isset($_FILES['mail_file']) && !empty($_FILES['mail_file']['tmp_name'])) {
			echo "<p style='color: blue;'>Файл загружен!</p>";
			
			$file_type = $_FILES['mail_file']['type'];
			$file_size = $_FILES['mail_file']['size'];
			
			echo "Тип файла: " . $file_type . "<br>";
			echo "Размер файла: " . $file_size . " байт<br>";
			
			if ( ( $file_type ==  'application/vnd.ms-excel' OR $file_type == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' ) and ( $file_size < 5120000 ) ) {
				echo "<p style='color: green;'>Файл прошел проверку типа и размера!</p>";
				
				// Создаем папку если нет
				if (!is_dir('mail-img')) {
					mkdir('mail-img', 0755, true);
					echo "Создана папка mail-img<br>";
				}
				
				$path = 'mail-img/'.$_FILES['mail_file']['name']; 
				echo "Путь для сохранения: " . $path . "<br>";
				
				if ( copy($_FILES['mail_file']['tmp_name'], $path) ) { 
					echo "<p style='color: green;'>Файл успешно скопирован!</p>";
					$picture = $path; 
				} else {
					echo "<p style='color: red;'>Ошибка при копировании файла!</p>";
				}
			} else {
				echo "<p style='color: red;'>Файл не прошел проверку!</p>";
				echo "Допустимые типы: application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet<br>";
				echo "Максимальный размер: 5120000 байт<br>";
				
				$_SESSION['win'] = 1;
				$_SESSION['recaptcha'] = '<p class="text-light">Вы пытаетесь загрузить неподходящий формат или размер файла. Файл должен быть в формате .xls или .xlsx и размером не более 5 МБ. Пожалуйста повторите попытку.</p>';
				header("Location: ".$_SERVER['HTTP_REFERER']);
				exit();
			}
		} else {
			echo "<p style='color: red;'>Файл НЕ загружен!</p>";
		}
		
		/* Отправляем почтовое сообщение  */
		if ( empty( $picture ) ) {
			echo "<p style='color: orange;'>Отправляем письмо БЕЗ файла</p>";
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "From: marketplit.ru\r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n";
			$msg = "Заявка на распил с сайта marketplit.ru (без файла)";
			
			if (mail( $mail_to, $thm, $msg, $headers )) {
				echo "<p style='color: green;'>Письмо без файла отправлено!</p>";
			} else {
				echo "<p style='color: red;'>Ошибка отправки письма без файла!</p>";
			}
		} else {
			echo "<p style='color: orange;'>Отправляем письмо С файлом</p>";
			$msg = "Заявка на распил.";
			send_mail($mail_to, $thm, $msg, $picture);
		}
		
		$_SESSION['win'] = 1;
		$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за Вашу заявку. Мы ответим Вам в&#160;ближайшее время.</p>';
		
		echo "<p style='color: green;'>Все выполнено! Сейчас будет перенаправление...</p>";
		echo "<script>setTimeout(function(){ window.location.href = '".$_SERVER['HTTP_REFERER']."'; }, 5000);</script>";
		// header("Location: ".$_SERVER['HTTP_REFERER']);
		
	} else {
		echo "<p style='color: red;'>POST запрос НЕ получен!</p>";
		echo "Метод запроса: " . $_SERVER['REQUEST_METHOD'];
	}
?>