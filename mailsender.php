<?php

require 'PHPMailer/PHPMailerAutoload.php';

function sendMail($fromMail, $fromName, $subject, $body, $altBody) {
	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	
	//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	
	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 0;
	
	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';
	
	//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';
	
	// use
	// $mail->Host = gethostbyname('smtp.gmail.com');
	// if your network does not support SMTP over IPv6
	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 465;
	
	//Set the encryption system to use - ssl (deprecated) or tls
	$mail->SMTPSecure = 'ssl';
	
	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;
	
	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "xavierbriole.smtp@gmail.com";
	
	//Password to use for SMTP authentication
	$mail->Password = "6Yb1AGLa6Rmq6zq7UVC6";

	//Set who the message is to be sent from
	$mail->setFrom($fromMail, $fromName);
	
	//Set an alternative reply-to address
	$mail->addReplyTo($fromMail, $fromName);
	
	//Set who the message is to be sent to
	$mail->addAddress('xbriole@icloud.com');

	//Set the subject line
	$mail->Subject = $subject;
	
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	// $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
	
	$mail->Body = $body;
	
	//Replace the plain text body with one created manually
	$mail->AltBody = $altBody;
	
	//Attach an image file
	// $mail->addAttachment('images/phpmailer_mini.png');
	
	$status = array();
	//send the message, check for errors
	if (!$mail->send()) {
	    header('Location: error'); exit;
	} else {
	    header('Location: success'); exit;
	}
}

//Mail sending
sendMail('no-reply@xavierbriole.com', 'no-reply', '[Piano Covers] New music request!', $_POST['body'], $_POST['body']);

?>