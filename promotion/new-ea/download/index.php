<?php
//ob_start();

session_start();
ini_set('display_errors', 1);

if(isset($_POST['send'])){
    $name    = $_POST['name'];
    $phone   = $_POST['number']; 


    $subject="Download Brochure for EA";
    $message  ="<p>Name     : ".$name."</p>";
    $message .="<p>Phone    : ".$phone."</p>";

    // $headers = "From: $name <info@akpisprofessionals.com>\n";
    // $headers .= "MIME-Version: 1.0\n";
    // $headers .= "Return-Path: <info@akpisprofessionals.com>\n";
    // $headers .= "Content-Type: text/html;\n";
    // $headers .= "X-Mailer: PHP/" . phpversion();
	
	$mail_type='download';
		include('../../db.php');
	
    require '../vendor/autoload.php';
    $email = new \SendGrid\Mail\Mail();

    $cc = 'support@akpisprofessionals.com';
    //$email->setFrom("purushottam@newvisiondigital.in","");
    $email->setFrom("iamcashammi@gmail.com","");
    $email->setSubject($subject);
    //$email->addto("purushottam.sharma@newvisiondigital.co");
    $email->addTo("iamcashammi@gmail.com");
    $email->addTo('pradeep@newvisiondigital.co');
	$email->addTo('mussavar.ali@newvisiondigital.co');	
    $email->addCc($cc,"");
    $email->addContent("text/html",$message);

    $sendGrid = new \SendGrid("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");
    try{
      $response = $sendGrid->send($email);
      if($response->statusCode()==202){
        header("Content-type:application/pdf");
        header("Content-Disposition:attachment;filename=Brochure-EA.pdf");
        readfile("https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-ea/docs/2022_EA_Exam_Guide-Digital_Version.pdf");

        // header("Location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-ea/thankyou.php"); 
      }
    }catch(\Throwable $th){
      header("location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-ea/");
    }
}

?>