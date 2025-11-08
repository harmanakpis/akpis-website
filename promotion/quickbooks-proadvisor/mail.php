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
    	
		
		require 'vendor/autoload.php';
		
		$sendGrid_email = new \SendGrid\Mail\Mail();
		//$email->setFrom("purushottam@newvisiondigital.in","");
		$sendGrid_email->setFrom("iamcashammi@gmail.com","ProAdvisor - AKPIS");
		$sendGrid_email->setSubject('Mail Form ProAdvisor Programme - AKPIS ');
		$sendGrid_email->addto("iamcashammi@gmail.com");
		$sendGrid_email->addto('pradeep@newvisiondigital.co');
	
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
	}else{
		echo json_encode(array('status'=>'error','message'=>'something went wrong! 3' ));
	}
	exit();

?>