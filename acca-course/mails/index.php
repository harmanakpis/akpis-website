<?php
//ob_start();

session_start();
ini_set('display_errors', 1);


//if(isset($_POST['enquery-form'])){
  $name    = $_POST['name'];
  $email   = $_POST['email'];
  $phone   = $_POST['phone']; 
  $city = $_POST['city'];
  $who_you_are = $_POST['who_you_are'];
//}

@extract($_POST);
// multiple recipients

$subject="AKPIS- ACCA COURSE";
$message  ="<p><strong>Name</strong> : ".$name."</p>";
$message .="<p><strong>Email</strong> : ".$email."</p>";
$message .="<p><strong>Phone No.</strong> : ".$phone."</p>";
$message .="<p><strong>City</strong> : ".$city."</p>";
$message .="<p><strong>Who Are You</strong> : ".$who_you_are."</p>";

if(!empty($current_url)){
	$message.="<p>Query From  : ".$current_url."</p>";
}

$comment = "City : $city , Who Are You : $who_you_are";
$mail_type='email';
	include('db.php');

/*
$namefrom = "infonvd";
$from="info@newvisiondigital.co";
*/

$headers = "From: $name <$email>\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Return-Path: <$email>\n";
$headers .= "Content-Type: text/html;\n";
$headers .= "X-Mailer: PHP/" . phpversion();




//echo $message;  
// Additional headers
    // Mail it
	
	
	require_once('../../send-in-blue/vendor/autoload.php');

			$credentials = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');
			$apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(new GuzzleHttp\Client(),$credentials);
			$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail([
				 'subject' => $subject,
				 'sender' => ['name' => 'AKPIS', 'email' => 'iamcashammi@gmail.com'],
				 'to' => [
							//[ 'name' => 'Saqib Ali', 'email' => 'saqib.ali@newvisiondigital.co'],
							[ 'name' => 'AKPIS', 'email' => 'iamcashammi@gmail.com']
							
						],
				 'htmlContent' => $message
			]);

			try {
				$result = $apiInstance->sendTransacEmail($sendSmtpEmail);
				echo json_encode(array("status"=>"success","message"=>"Form has been submitted successfully"));
			} catch (Exception $e) {
				echo json_encode(array("status"=>"error","message"=>$e->getMessage()));				
			}
			

?>