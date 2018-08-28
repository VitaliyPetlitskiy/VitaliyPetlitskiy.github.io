<?php

	define("destination", 'name@domain.com'); // email address of destination
	
	error_reporting (E_ALL ^ E_NOTICE);

	function validate_email($email)
	{
		$regex = '/([a-z0-9_.-]+)'. 
		'@'. 
		'([a-z0-9.-]+){2,255}'. 
		'.'. 
		'([a-z]+){2,10}/i'; 
		
		if($email == '') 
			return false;
		else
			$eregi = preg_replace($regex, '', $email);
		return empty($eregi) ? true : false;
	}

	$post = (!empty($_POST)) ? true : false;
	
	if($post)
	{
		$name 	 = stripslashes($_POST['name']);
		$email 	 = trim($_POST['email']);
		$subject = trim($_POST['subject']);
		$message = stripslashes($_POST['message']);
	
		$error = '';
	
		if(!$name)
			$error .= 'Name required! ';
	
		if(!$email)
			$error .= 'E-mail required! ';
	
		if($email && !validate_email($email))
			$error .= 'E-mail address is not valid! ';
	
		if(!$message)
			$error .= "Please enter your message!";
	
		if(!$error)
		{
			$mail = @mail(destination, $subject, $message,
				 "From: ".$name." <".$email.">\r\n"
				."Reply-To: ".$email."\r\n"
				."Return-Path: " .$email. "\r\n"
				."MIME-Version: 1.0\r\n"	
				."Content-type: text/html; charset=UTF-8\r\n");
			
			if($mail){
				echo 'OK';
			}else{
				echo 'Could not send email!';
			}
		}
		else
			echo $error;
	}

?>