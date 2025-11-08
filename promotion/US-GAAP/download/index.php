<?php
//ob_start();

session_start();
ini_set('display_errors', 1);

if(isset($_POST['send'])){
    $name    = $_POST['name'];
    $phone   = $_POST['number']; 


    $subject="Download Brochure for USA-GAAP";
    $message  ="<p>Name     : ".$name."</p>";
    $message .="<p>Phone    : ".$phone."</p>";
	
	
	if(!empty($current_url)){
		$message.="<p>Query From  : ".$current_url."</p>";
	}
$mail_type='download';
	include('../../db.php');

    // $headers = "From: $name <info@akpisprofessionals.com>\n";
    // $headers .= "MIME-Version: 1.0\n";
    // $headers .= "Return-Path: <info@akpisprofessionals.com>\n";
    // $headers .= "Content-Type: text/html;\n";
    // $headers .= "X-Mailer: PHP/" . phpversion();
	
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
				header("Content-type:application/pdf");
				header("Content-Disposition:attachment;filename=US-GAAP-Brochure.pdf");
				readfile("https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/US-GAAP/docs/US-GAAP.pdf");
			} catch (Exception $e) {
				//echo $e->getMessage(),PHP_EOL;
				header("location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/US-GAAP/");
			}
	
	/*
    require '../vendor/autoload.php';
    $email = new \SendGrid\Mail\Mail();

    $cc = 'support@akpisprofessionals.com';
    //$email->setFrom("purushottam@newvisiondigital.in","");
    $email->setFrom("iamcashammi@gmail.com","");
    $email->setSubject($subject);
    $email->addto("iamcashammi@gmail.com");
    $email->addto('pradeep@newvisiondigital.co');
	//$email->addto('purushottam.sharma@newvisiondigital.co');
    $email->addCc($cc,"");
    $email->addContent("text/html",$message);

    $sendGrid = new \SendGrid("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");
    try{
      $response = $sendGrid->send($email);
      if($response->statusCode()==202){
        header("Content-type:application/pdf");
        header("Content-Disposition:attachment;filename=US-GAAP-Brochure.pdf");
        readfile("https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/US-GAAP/docs/US-GAAP.pdf");

        // header("Location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/US-GAAP/thankyou.php"); 
      }
    }catch(\Throwable $th){
      header("location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/US-GAAP/");
    }
	*/
	
}

?>