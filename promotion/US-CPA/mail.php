<?php
//ob_start();

session_start();
ini_set('display_errors', 1);


//if(isset($_POST['enquery-form'])){
  $email   = $_POST['your-email']; 
  $name    = $_POST['your-name'];
  $phone   = $_POST['your-phone']; 
  $comment = $_POST['your-message'];
//}


@extract($_POST);
// multiple recipients


$to = 'pradeep@newvisiondigital.co';
$cc = 'support@akpisprofessionals.com';

$subject="AKPIS- US CPA Enquiry";
$message  ="<p>Name     : ".$name."</p>";
$message .="<p>Email    : ".$email."</p>";
$message .="<p>Phone    : ".$phone."</p>";
$message .="<p>Message  : ".$comment."</p>";

/*
$namefrom = "infonvd";
$from="info@newvisiondigital.co";
*/

$headers = "From: $name <$email>\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Return-Path: <$email>\n";
$headers .= "Content-Type: text/html;\n";
$headers .= "X-Mailer: PHP/" . phpversion();
// echo $message;  
// Additional headers
    // Mail it

    require 'vendor/autoload.php';
	
    $email = new \SendGrid\Mail\Mail();
    //$email->setFrom("purushottam@newvisiondigital.in","");
    $email->setFrom("iamcashammi@gmail.com","");
    $email->setSubject($subject);
    $email->addTo("iamcashammi@gmail.com");
    $email->addTo("pradeep@newvisiondigital.co");
    //$email->addTo("saqib.ali@newvisiondigital.co");
    //$email->addTo($to,"");
    $email->addCc($cc,"");
    $email->addContent("text/html",$message);
    
    $sendGrid = new \SendGrid("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");
    try{
      $response = $sendGrid->send($email);
      // print_r($response);
      if($response->statusCode()==202){
        header("Location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/US-CPA/thankyou.html"); 
      }
    }catch(\Throwable $th){
      header("location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/US-CPA/");
    }


// if(mail($to,$subject,$message,$headers)){
//   header("Location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/US-CPA/thank-you.html"); 
// }else{
//   header("location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/US-CPA/");
// }

?>