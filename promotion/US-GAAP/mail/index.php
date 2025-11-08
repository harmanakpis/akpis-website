<?php
//ob_start();

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

if(!empty($current_url)){
		$message.="<p>Query From  : ".$current_url."</p>";
	}

$mail_type='email';
	include('../../db.php');

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

		require_once('../../../send-in-blue/vendor/autoload.php');

			$credentials = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');
			$apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(new GuzzleHttp\Client(),$credentials);
			$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail([
				 'subject' => $subject,
				 'sender' => ['name' => 'AKPIS', 'email' => 'iamcashammi@gmail.com'],
				 'to' => [
							[ 'name' => 'Shammi Saluja', 'email' => 'iamcashammi@gmail.com'],
							[ 'name' => 'Pradeep', 'email' => 'pradeep@newvisiondigital.co'],
							['name' =>'Saqib Ali','email'=>'saqib.ali@newvisiondigital.co'],
							['name' =>'Support','email'=>'support@akpisprofessionals.com']
						],
				 'htmlContent' => $message
			]);

			try {
				$result = $apiInstance->sendTransacEmail($sendSmtpEmail);
				header("Location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/US-GAAP/thankyou");
			} catch (Exception $e) {
				//echo $e->getMessage(),PHP_EOL;
				header("location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/US-GAAP/");
			}
			
	/*
    require '../vendor/autoload.php';
	
    $email = new \SendGrid\Mail\Mail();
    //$email->setFrom("purushottam@newvisiondigital.in","");
    $email->setFrom("iamcashammi@gmail.com","");
    $email->setSubject($subject);
    $email->addto("iamcashammi@gmail.com");
    $email->addto('pradeep@newvisiondigital.co');
    $email->addto("saqib.ali@newvisiondigital.co");
	//$email->addto('purushottam.sharma@newvisiondigital.co');

    // $email->addCc($cc,"");
    $email->addContent("text/html",$message);
    
    $sendGrid = new \SendGrid("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");
	
    try{
      $response = $sendGrid->send($email);
	  //print_r($response);
      if($response->statusCode()==202){
        header("Location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/US-GAAP/thankyou"); 
      }
	  
    }catch(\Throwable $th){
      header("location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/US-GAAP/");
    }

	*/

// if(mail($to,$subject,$message,$headers)){
//   header("Location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/US-CPA/thank-you.html"); 
// }else{
//   header("location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/US-CPA/");
// }

?>