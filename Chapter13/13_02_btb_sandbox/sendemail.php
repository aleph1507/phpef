<?php 

	$to = "xrristo@gmail.com";

	// Windows might not be able to handle format
	// $to = "Hristo Hristo <xrristo@gmail.com>"

	// multiple recipients
	// $to = "xrristo@gmail.com, junkmail@novafabrica.com";

	// $to = "Kevin Skoglund <junkmail@novafabrica.com, nobody@novafabrica.com>"

	$subject = "Mail Test at ".strftime("%T", time());

	$message = 'This is a test.';

	// Word wrap for old emai programs
	// wrap at 70/72/75/78

	$message = wordwrap($message, 70);

	$from = "hristo Hristo <xrristo@gmail.com>";
	$headers = "From: {$from}\n";
	$headers .= "Reply-To: {$from}\n";
	$headers .= "Cc: {$to}\n";
	$headers .= "Bcc: {$to}\n";
	$headers .= "X-Mailer: PHP/".phpversion()."\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-Type: text/html; charset=iso-8859-1";


	$result = mail($to, $subject, $message, $headers);
	echo $result ? 'Sent' : 'Error';
	echo '<br>';
	echo $headers;

?>