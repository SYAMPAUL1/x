<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
        $number = $_POST['number'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		
		$from = 'Demo Contact Form'; 
		$to = 'ganeshlb1234@gmail.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body = "From: $name\n PhoneNumber: $number\n EMail: $email\n Message:\n $message";
 
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
        
        if (!$_POST['number']) {
			$errName = 'Please enter your number';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		
 
// If there are no errors, send the email
if (!$errName && !$errPhoneNumber &&!$errEMail && !$errMessage ) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! We will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>