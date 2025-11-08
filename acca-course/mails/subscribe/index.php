<?php
//ob_start();

session_start();
ini_set('display_errors', 1);

//if(isset($_POST['enquery-form'])){
  $email   = $_POST['email'];
//}

@extract($_POST);
// multiple recipients


$subject="AKPIS- ACCA COURSE Subscriber Email";
$message  ="<p>Email     : ".$email."</p>";


	$mail_type='subscribe';
	include('../../db.php');

/*
$namefrom = "infonvd";
$from="info@newvisiondigital.co";
*/

$headers = "From: $email\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Return-Path: <$email>\n";
$headers .= "Content-Type: text/html;\n";
$headers .= "X-Mailer: PHP/" . phpversion();
//echo $message;  
// Additional headers
    // Mail it

		require_once('../../../send-in-blue/vendor/autoload.php');

			$credentials = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');
			$apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(new GuzzleHttp\Client(),$credentials);
			$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail([
				 'subject' => $subject,
				 'sender' => ['name' => 'AKPIS', 'email' => 'iamcashammi@gmail.com'],
				 'to' => [
							[ 'name' => 'Rishabh Goswami', 'email' => 'rishabh.goswami@newvisiondigital.co'],
							[ 'name' => 'Abhishek', 'email' => 'abhishek.web@newvisiondigital.co']
						],
				 'htmlContent' => $message
			]);

			try {
				$result = $apiInstance->sendTransacEmail($sendSmtpEmail);
				header("Location:https://wordpress-1285171-4657113.cloudwaysapps.com/acca-course/thankyou.html"); 
			} catch (Exception $e) {
				//echo $e->getMessage(),PHP_EOL;
				header("location:https://wordpress-1285171-4657113.cloudwaysapps.com/acca-course/");
			}


?>