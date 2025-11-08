<?php
//ob_start();

session_start();
ini_set('display_errors', 1);

if(isset($_POST['send'])){
    $name    = $_POST['name'];
    $phone   = $_POST['number']; 


    $subject="Download Brochure for IFRS";
    $message  ="<p>Name     : ".$name."</p>";
    $message .="<p>Phone    : ".$phone."</p>";

    // $headers = "From: $name <info@akpisprofessionals.com>\n";
    // $headers .= "MIME-Version: 1.0\n";
    // $headers .= "Return-Path: <info@akpisprofessionals.com>\n";
    // $headers .= "Content-Type: text/html;\n";
    // $headers .= "X-Mailer: PHP/" . phpversion();
	
    require 'vendor/autoload.php';
    $email = new \SendGrid\Mail\Mail();

    $cc = 'support@akpisprofessionals.com';
    $email->setFrom("iamcashammi@gmail.com","");
    $email->setSubject($subject);
    //$email->addto("shivam.singhal@newvisiondigital.co");
	//$email->addto("purushottam@newvisiondigital.in");
    $email->addto("iamcashammi@gmail.com");
    // $email->addto("kartikey@newvisiondigital.in");
    $email->addto('pradeep@newvisiondigital.co');
    $email->addCc($cc,"");
    $email->addContent("text/html",$message);

    $sendGrid = new \SendGrid("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");
    try{
      $response = $sendGrid->send($email);
      if($response->statusCode()==202){
        header("Content-type:application/pdf");
        header("Content-Disposition:attachment;filename=Brochure.pdf");
        readfile("https://akpisprofessionals.com/promotion/new-IFRS/docs/brochure-file-ifrs.pdf");

        // header("Location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-IFRS/thankyou.php"); 
      }
    }catch(\Throwable $th){
      header("location:https://akpisprofessionals.com/promotion/new-IFRS/");
    }
}

?>