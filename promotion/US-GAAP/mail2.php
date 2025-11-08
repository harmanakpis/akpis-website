<?php

session_start();
ini_set('display_errors', 1);

//if(isset($_POST['enquery-form'])){
$name    = $_POST['name'];
  $email   = $_POST['email'];
  $phone   = $_POST['number']; 
  $comment = $_POST['message'];
//}

@extract($_POST);
// multiple recipients

//$to = 'vikrant@newvisiondigital.co';
$cc = 'support@akpisprofessionals.com';
//$to = 'pradeep@newvisiondigital.co';

$subject="AKPIS- US-GAAP Course Enquiry";
$message  ="<p>Name     : ".$name."</p>";
$message .="<p>Email    : ".$email."</p>";
$message .="<p>Phone    : ".$phone."</p>";
$message .="<p>Message  : ".$comment."</p>";

require_once('../../send-in-blue/vendor/autoload.php');


$tos = array(
				array("email"=>"iamcashammi@gmail.com"),
				array("email"=>"pradeep@newvisiondigital.co"),
				array("email"=>"saqib.ali@newvisiondigital.co")
			);

$credentials = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key','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');
$apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(new GuzzleHttp\Client(),$credentials);

$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail([
     'subject' => $subject,
     'sender' => ['name' => 'AKPIS', 'email' => 'iamcashammi@gmail.com'],
     
     'to' => $tos,
     'htmlContent' => $message
]);

try {
    $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
	//print_r($result);
    header("Location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/US-GAAP/thankyou.php"); 
} catch (Exception $e) {
	//print_r($e);
    header("location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/US-GAAP/");
}
?>