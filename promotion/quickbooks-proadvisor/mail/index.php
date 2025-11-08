<?php

	$name    = $_POST['name'];
	  $email   = $_POST['email'];
	  $phone   = $_POST['phone']; 
	  $message = $_POST['message'];
	  $current_url = $_POST['current_url'];
  
	if(!empty($name) && !empty($email) && !empty($phone)){
		
    	$mailBody ='<table>';
    	  $mailBody.='<tr> <td>Name :</td><td>'. $name.'</td></tr>';
    	  $mailBody.='<tr> <td>Email : </td><td>'.$email.'</td></tr>';
    	  $mailBody.='<tr> <td>Phone : </td><td>'.$phone.'</td></tr>';
    	  $mailBody.='<tr> <td>Message : </td><td>'.$message.'</td></tr>';
    	  
    	  if(!empty($current_url)){
        	$mailBody.='<tr> <td>Query From : </td><td>'.$current_url.'</td></tr>';
        }

    	$mailBody.='</table>';
		
		$mail_type='email';
		$comment = $message;
		include('../../db.php');
		
		require_once('../../../send-in-blue/vendor/autoload.php');

			$credentials = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');
			$apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(new GuzzleHttp\Client(),$credentials);
			$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail([
				 'subject' => 'Mail Form ProAdvisor Programme - AKPIS ',
				 'sender' => ['name' => 'ProAdvisor - AKPIS', 'email' => 'iamcashammi@gmail.com'],
				 'to' => [
							[ 'name' => 'Shammi Saluja', 'email' => 'iamcashammi@gmail.com'],
							[ 'name' => 'Pradeep', 'email' => 'pradeep@newvisiondigital.co'],
							['name' =>'Saqib Ali','email'=>'saqib.ali@newvisiondigital.co'],
							['name' =>'Support','email'=>'support@akpisprofessionals.com'],
							['name' =>'Rishabh Goswami','email'=>'rishabh.goswami@newvisiondigital.co']
						],
				 'htmlContent' => $mailBody
			]);

			try {
				$result = $apiInstance->sendTransacEmail($sendSmtpEmail);
				echo json_encode(array('status'=>'ok','message'=>'Mail has been sent'));
			} catch (Exception $e) {
				//echo $e->getMessage(),PHP_EOL;
				echo json_encode(array('status'=>'error','message'=>'something went wrong!'));
			}
    	
		/*
		require '../vendor/autoload.php';
		
		$sendGrid_email = new \SendGrid\Mail\Mail();
		//$email->setFrom("purushottam@newvisiondigital.in","");
		$sendGrid_email->setFrom("iamcashammi@gmail.com","ProAdvisor - AKPIS");
		$sendGrid_email->setSubject('Mail Form ProAdvisor Programme - AKPIS ');
		$sendGrid_email->addto("iamcashammi@gmail.com");
		$sendGrid_email->addto('pradeep@newvisiondigital.co');
		//$sendGrid_email->addto('purushottam.sharma@newvisiondigital.co');
		$sendGrid_email->addto('saqib.ali@newvisiondigital.co');     // Add a recipient
		//$sendGrid_email->addto('purushottam.sharma@newvisiondigital.co');     // Add a recipient
		//$sendGrid_email->addto('pooja.tomar@newvisiondigital.co');     // Add a recipient
		//$sendGrid_email->addto('gursimar.singh@newvisiondigital.co');     // Add a recipient
	   

		// $email->addCc($cc,"");
		$sendGrid_email->addContent("text/html",$mailBody);
		
		$sendGrid = new \SendGrid("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");
		try{
		  $response = $sendGrid->send($sendGrid_email);
		  if($response->statusCode()==202){
			echo json_encode(array('status'=>'ok','message'=>'Mail has been sent'));
		  }else{
			  echo json_encode(array('status'=>'error','message'=>'something went wrong! 1'));
		  }
		  
		}catch(\Throwable $th){
			echo json_encode(array('status'=>'error','message'=>'something went wrong! 2'));
		}
		*/
	}else{
		echo json_encode(array('status'=>'error','message'=>'something went wrong! 3' ));
	}
	exit();

?>