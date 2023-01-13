<?php
	$field_name = $_POST['your-name'];
	$field_email = $_POST['your-email'];
	$field_message = $_POST['your-message'];
	$mail_to = 'ippei99@gmail.com';
	$subject = 'Message from a site visitor '.$field_name;
	$body_message = 'From: '.$field_name."\n";
	$body_message .= 'E-mail: '.$field_email."\n";
	$body_message .= 'Message: '.$field_message;
	$headers = 'From: '.$field_email."\r\n";
	$headers .= 'Reply-To: '.$field_email."\r\n";
	$mail_status = mail($mail_to, $subject, $body_message, $headers);
?>