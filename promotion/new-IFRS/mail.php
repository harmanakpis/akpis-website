<?php
//ob_start();

session_start();
ini_set('display_errors', 1);
print_r($_POST);

//if(isset($_POST['enquery-form'])){
  $name    = $_POST['name'];
  $email   = $_POST['email'];
  $phone   = $_POST['number']; 
  $comment = $_POST['message'];
//}

@extract($_POST);
// multiple recipients
$cc = 'support@akpisprofessionals.com';

$subject="AKPIS- IFRS Course Enquiry";
$message  ="<p>Name     : ".$name."</p>";
$message .="<p>Email    : ".$email."</p>";
$message .="<p>Phone    : ".$phone."</p>";
$message .="<p>Message  : ".$comment."</p>";

if(!empty($current_url)){
	$message.="<p>Query From  : ".$current_url."</p>";
}

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

    require 'vendor/autoload.php';
	
    $email = new \SendGrid\Mail\Mail();
    $email->setFrom("iamcashammi@gmail.com");
    $email->setSubject($subject);
    // $email->addto("divik.prakash@newvisiondigital.in");
    $email->addto("iamcashammi@gmail.com");
    $email->addto('pradeep@newvisiondigital.co');
    
   // $email->addTo("saqib.ali@newvisiondigital.co");
	//$email->addTo("purushottam.sharma@newvisiondigital.co");
	
    //$email->addto('shivam.singhal@newvisiondigital.co');
    $email->addCc($cc,"");
    $email->addContent("text/html",$message);
    
    $sendGrid = new \SendGrid("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");
	
    try{
      $response = $sendGrid->send($email);
       //print_r($response); exit;
        header("location:https://akpisprofessionals.com/promotion/new-IFRS/thankyou.php"); 
      
    }catch(\Throwable $th){
      header("location:https://akpisprofessionals.com/promotion/new-IFRS/");
    }


// if(mail($to,$subject,$message,$headers)){
//   header("Location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/IFRS/thank-you.html"); 
// }else{
//   header("location:https://wordpress-1285171-4657113.cloudwaysapps.com/promotion/IFRS/");
// }

?>