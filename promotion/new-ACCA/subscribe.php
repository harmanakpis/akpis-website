<?php
//ob_start();

session_start();
ini_set('display_errors', 1);

//if(isset($_POST['enquery-form'])){
  $email   = $_POST['email'];
//}

@extract($_POST);
// multiple recipients

//$to = 'vikrant@newvisiondigital.co';
$cc = 'support@akpisprofessionals.com';
//$to = 'pradeep@newvisiondigital.co';

$subject="AKPIS- ACCA Subscriber Email";
$message  ="<p>Email     : ".$email."</p>";

/*
$namefrom = "infonvd";
$from="info@newvisiondigital.co";
*/

$headers = "From: $email\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Return-Path: <$email>\n";
$headers .= "Content-Type: text/html;\n";
$headers .= "X-Mailer: PHP/" . phpversion();
//echo $message;  
// Additional headers
    // Mail it

    require 'vendor/autoload.php';
	
    $email = new \SendGrid\Mail\Mail();
    //$email->setFrom("purushottam@newvisiondigital.in","");
    $email->setFrom("iamcashammi@gmail.com","");
    $email->setSubject($subject);
    $email->addto("iamcashammi@gmail.com");
    $email->addto('pradeep@newvisiondigital.co');
	$email->addTo("saqib.ali@newvisiondigital.co");
    //$email->addTo($to,"");

    $email->addCc($cc,"");
    $email->addContent("text/html",$message);
    
    $sendGrid = new \SendGrid("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");
    try{
      $response = $sendGrid->send($email);
      if($response->statusCode()==202){
        header("Location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-US_CMA/thankyou.php"); 
      }
    }catch(\Throwable $th){
      header("location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/new-ACCA/");
    }


// if(mail($to,$subject,$message,$headers)){
//   header("Location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/US-CPA/thank-you.html"); 
// }else{
//   header("location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/US-CPA/");
// }

?>