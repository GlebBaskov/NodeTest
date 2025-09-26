<?php
require "recaptchalib.php";
require 'class.phpmailer.php';

	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$mail = new PHPMailer;
	$mail->CharSet="utf-8";
	$mail->setFrom('order@studreg.ru', 'order@studreg.ru');
	$mail->addReplyTo($email, $email);
	$mail->addAddress('order@studreg.ru', 'order@studreg.ru');     // Add a recipient
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = "Заказ";
	$mail->Body    = "Заказ от "  . $email . "<br>" . "Сообщение: " . $message;
	$secret = "6LdDiCEUAAAAALr8hO_x3lK2BGhg2Pus8gqHDql_";
	$response = null;
	$reCaptcha = new ReCaptcha($secret);
	if ($_POST["g-recaptcha-response"])
	{
		$response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]);
	}	
	if ($response != null && $response->success) 
	{
	
		if(!$mail->send())
		{
			header( "Location: http://www.studreg.ru" );
			exit;
		}
		else
		{
			header( "Location: http://www.studreg.ru" );
			exit;
		}	
	}
?>