<?php

if(isset($_POST['send']) && !empty($_POST['g-recaptcha-response']))
{
	extract($_POST);
	$secret = '6LdsZIEpAAAAAGoXJ35T26RvX27jazCSZZKjcs59';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if($responseData->success){
    	if(!empty($name) && !empty($email) && !empty($number) ){
			//&& !empty($message)
        	$mailBody ='<table>';
        	  $mailBody.='<tr> <td>Name :</td><td>'. $name.'</td></tr>';
        	  $mailBody.='<tr> <td>Email : </td><td>'.$email.'</td></tr>';
        	  $mailBody.='<tr> <td>Phone : </td><td>'.$number.'</td></tr>';
        	  $mailBody.='<tr> <td>Message : </td><td>'.$message.'</td></tr>';
        	$mailBody.='</table>';
      
	  
	$phone = $number;
	$comment = $message;
	$mail_type='email';
	include('../promotion/db.php');

			require_once('../send-in-blue/vendor/autoload.php');

			$credentials = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');
			$apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(new GuzzleHttp\Client(),$credentials);
			$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail([
				 'subject' => 'AKPIS- CIA Course Enquiry ' . $name,
				 'sender' => ['name' => 'AKPIS', 'email' => 'iamcashammi@gmail.com'],
				 'to' => [
							['name' =>'IAMCASHAMMI','email'=>'iamcashammi@gmail.com'],
							['name' =>'Support','email'=>'support@akpisprofessionals.com'],
							['name' =>'Mussavar Ali','email'=>'mussavar.ali@newvisiondigital.co']
						],
				 'htmlContent' => $mailBody
			]);

			try {
				$result = $apiInstance->sendTransacEmail($sendSmtpEmail);
				
				header("location:https://akpisprofessionals.com/internal-auditor-course/thankyou.php"); 
			} catch (Exception $e) {
				echo $e->getMessage(),PHP_EOL;die();
				header("location:https://akpisprofessionals.com/internal-auditor-course");
			}
			
    	}else{
    	    header("location:https://akpisprofessionals.com/internal-auditor-course/");
    	    echo "<h1 style='text-align:center;'>Required Fields are mandatory!. </h1>";
    	}
    }else{
        header("location:https://akpisprofessionals.com/internal-auditor-course/");
    	echo "<h1 style='text-align:center;'>Verify Captcha First!. </h1>";
    }
} else {
    //echo "<h1 style='text-align:center;'> OOps something went wrong! Please try again later. </h1>";
	echo '<script language="javascript">alert("Capthca not verified");</script>';
		echo '<script language="javascript">window.location.href="https://wordpress-1285171-4657113.cloudwaysapps.com/internal-auditor-course/";</script>';
}
?>
