<?php

	$servername = "localhost";
	$username = "ptepbkujwf";
	$password = "MVQs4h34Ke";
	$dbname = "ptepbkujwf";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn->connect_error) {

			define('TIMEZONE', 'Asia/Kolkata');
			date_default_timezone_set(TIMEZONE);
			$dt = date("Y-m-d H:i A");
			
		if(empty($mail_type)){
			$mail_type='N/A';
		}
		if(empty($current_url)){
			$current_url='N/A';
		}
		if(empty($name)){
			$name='';
		}
		if(empty($email)){
			$email='';
		}
		if(empty($phone)){
			$phone='';
		}
		if(empty($comment)){
			$comment='';
		}
		$sql = "INSERT INTO leads (fullname,email,phone,message,query_from,created_at,mail_type)
		VALUES ('$name', '$email', '$phone','$comment','$current_url',NOW(),'$mail_type')";

		$conn->query($sql); 

		$conn->close();
	}
	

?>