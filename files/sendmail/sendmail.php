<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';
	require 'phpmailer/src/SMTP.php';

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('ru', 'phpmailer/language/');
	$mail->IsHTML(true);

	/*
	$mail->isSMTP();                                            //Send using SMTP
	$mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
	$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	$mail->Username   = 'user@example.com';                     //SMTP username
	$mail->Password   = 'secret';                               //SMTP password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
	$mail->Port       = 465;                 
	*/

	//От кого письмо
	$mail->setFrom('from@gmail.com'); // Указать нужный E-mail
	//Кому отправить
	$mail->addAddress('andreypbiz@gmail.com'); // Указать нужный E-mail
	//Тема письма


	if(trim(!empty($_POST['sadybahome']))){

		$mail->Subject = $_POST['sadybahome']['subject'];

		$body = '<p><b>Имя:</b>' . $_POST['sadybahome']['name'] .'</p>';
		$body.= '<p><b>Тип номера:</b>'. $_POST['sadybahome']['typeroom'] .'</p>';
		$body.= '<p><b>Количество детей:</b>'. $_POST['sadybahome']['quantity'] .'</p>';
		$body.= '<p><b>Дата заезда:</b>'. $_POST['sadybahome']['quantity'] .'</p>';

	}
	if(trim(!empty($_POST['bielanyhome']))){

		$mail->Subject = $_POST['bielanyhome']['subject'];

		$body = '<p><b>Имя:</b>' . $_POST['bielanyhome']['name'] .'</p>';
		$body.= '<p><b>Тип номера:</b>'. $_POST['bielanyhome']['typeroom'] .'</p>';
		$body.= '<p><b>Количество детей:</b>'. $_POST['bielanyhome']['quantity'] .'</p>';
		$body.= '<p><b>Дата заезда:</b>'. $_POST['bielanyhome']['quantity'] .'</p>';

	}
	if(trim(!empty($_POST['nowewlochyhome']))){

		$mail->Subject = $_POST['nowewlochyhome']['subject'];

		$body = '<p><b>Имя:</b>' . $_POST['nowewlochyhome']['name'] .'</p>';
		$body.= '<p><b>Тип номера:</b>'. $_POST['nowewlochyhome']['typeroom'] .'</p>';
		$body.= '<p><b>Количество детей:</b>'. $_POST['nowewlochyhome']['quantity'] .'</p>';
		$body.= '<p><b>Дата заезда:</b>'. $_POST['nowewlochyhome']['quantity'] .'</p>';

	}
	if(trim(!empty($_POST['promienisty']))){

		$mail->Subject = $_POST['promienisty']['subject'];

		$body = '<p><b>Имя:</b>' . $_POST['promienisty']['name'] .'</p>';
		$body.= '<p><b>Тип номера:</b>'. $_POST['promienisty']['typeroom'] .'</p>';
		$body.= '<p><b>Количество детей:</b>'. $_POST['promienisty']['quantity'] .'</p>';
		$body.= '<p><b>Дата заезда:</b>'. $_POST['promienisty']['quantity'] .'</p>';

	}
	if(trim(!empty($_POST['pruszkowhome']))){

		$mail->Subject = $_POST['pruszkowhome']['subject'];

		$body = '<p><b>Имя:</b>' . $_POST['pruszkowhome']['name'] .'</p>';
		$body.= '<p><b>Тип номера:</b>'. $_POST['pruszkowhome']['typeroom'] .'</p>';
		$body.= '<p><b>Количество детей:</b>'. $_POST['pruszkowhome']['quantity'] .'</p>';
		$body.= '<p><b>Дата заезда:</b>'. $_POST['pruszkowhome']['quantity'] .'</p>';

	}
	if(trim(!empty($_POST['targowekhome']))){

		$mail->Subject = $_POST['targowekhome']['subject'];

		$body = '<p><b>Имя:</b>' . $_POST['targowekhome']['name'] .'</p>';
		$body.= '<p><b>Тип номера:</b>'. $_POST['targowekhome']['typeroom'] .'</p>';
		$body.= '<p><b>Количество детей:</b>'. $_POST['targowekhome']['quantity'] .'</p>';
		$body.= '<p><b>Дата заезда:</b>'. $_POST['targowekhome']['quantity'] .'</p>';

	}
	if(trim(!empty($_POST['wilanowhome']))){

		$mail->Subject = $_POST['wilanowhome']['subject'];

		$body = '<p><b>Имя:</b>' . $_POST['wilanowhome']['name'] .'</p>';
		$body.= '<p><b>Тип номера:</b>'. $_POST['wilanowhome']['typeroom'] .'</p>';
		$body.= '<p><b>Количество детей:</b>'. $_POST['wilanowhome']['quantity'] .'</p>';
		$body.= '<p><b>Дата заезда:</b>'. $_POST['wilanowhome']['quantity'] .'</p>';

	}
	if(trim(!empty($_POST['wlochyhome']))){

		$mail->Subject = $_POST['wlochyhome']['subject'];

		$body = '<p><b>Имя:</b>' . $_POST['wlochyhome']['name'] .'</p>';
		$body.= '<p><b>Тип номера:</b>'. $_POST['wlochyhome']['typeroom'] .'</p>';
		$body.= '<p><b>Количество детей:</b>'. $_POST['wlochyhome']['quantity'] .'</p>';
		$body.= '<p><b>Дата заезда:</b>'. $_POST['wlochyhome']['quantity'] .'</p>';
	}
	
	if(trim(!empty($_POST['сallback']))){

		$mail->Subject = $_POST['сallback']['subject'];

		$body = '<p><b>Имя:</b>' . $_POST['сallback']['name'] .'</p>';
		$body.= '<p><b>Номер телефона:</b>'. $_POST['сallback']['phone'] .'</p>';
	}

	if(trim(!empty($_POST['partners']))){

		$mail->Subject = $_POST['partners']['subject'];

		$body = '<p><b>Имя:</b>' . $_POST['partners']['name'] .'</p>';
		$body = '<p><b>Название фирмы:</b>' . $_POST['partners']['firm'] .'</p>';
		$body = '<p><b>Почта:</b>' . $_POST['partners']['email'] .'</p>';
		$body.= '<p><b>Номер телефона:</b>'. $_POST['partners']['phone'] .'</p>';
	}
	if(trim(!empty($_POST['vacancies']))){

		$mail->Subject = $_POST['vacancies']['subject'];

		$body = '<p><b>Имя:</b>' . $_POST['vacancies']['name'] .'</p>';
		$body.= '<p><b>Номер телефона:</b>'. $_POST['vacancies']['phone'] .'</p>';
	}
	
	$mail->Body = $body;

	//Отправляем
	if (!$mail->send()) {
		$message = 'Ошибка';
	} else {
		$message = 'Данные отправлены!';
	}

	$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);
?>