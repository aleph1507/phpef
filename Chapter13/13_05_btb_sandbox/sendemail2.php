<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'vendor/phpmailer/phpmailer/src/Exception.php';
	require 'vendor/phpmailer/PHPMailer/src/PHPMailer.php';
	require 'vendor/phpmailer/PHPMailer/src/SMTP.php';

	$to_name = "Junk Mail";
	$to = "nobody@somedomain.com";

	$subject = "Mail Test at ".strftime("%T", time());

	$message = "This is a test.";
	// Optional: Wrap lines for old email programs
	// wrap at 70/72/75/78
	$message = wordwrap($message,70);
	
	$from_name = "Some Body";
	$from = "somebody@somedomain.com";

	// SMTP version

	$mail = new PHPMailer();

	$mail->IsSMTP();
	$mail->Host = "your.host.com";
	$mail->Port = 25;
	$mail->SMTPAuth = false;
	$mail->Username = "your_username";
	$mail->Password = "your_password";

	$mail->FromName = $from_name;
	$mail->From = $from;
	$mail->AddAddress($to, $to_name);
	$mail->Subject = $subject;
	$mail->Body = $message;

	$result = $mail->Send() ;
	echo $result ? 'Sent' : 'Error';
  
?>