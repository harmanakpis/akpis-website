<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library files
require 'mailer/src/Exception.php';
require 'mailer/src/PHPMailer.php';
require 'mailer/src/SMTP.php';

if(isset($_POST['send']) && !empty($_POST['g-recaptcha-response']))
{
	extract($_POST);
	$secret = '6LdY-bkfAAAAAP4-2oYhEL5pYmFAq10cE27q3D9D';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if($responseData->success){
    	if(!empty($name) && !empty($email) && !empty($number) && !empty($message)){
        	$mailBody ='<table>';
        	  $mailBody.='<tr> <td>Name :</td><td>'. $name.'</td></tr>';
        	  $mailBody.='<tr> <td>Email : </td><td>'.$email.'</td></tr>';
        	  $mailBody.='<tr> <td>Phone : </td><td>'.$number.'</td></tr>';
        	  $mailBody.='<tr> <td>Message : </td><td>'.$message.'</td></tr>';
        	$mailBody.='</table>';
        	//  $to = 'jai@newvisiondigital.in';
            // 	$subject = 'New Enquiry Email from ' . $name;
            // 	$headers = "MIME-Version: 1.0" . "\r\n";
            // 	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // 	$headers .= 'From: '.$email;
            // 	if(mail($to, $subject, $mailBody, $headers)){
            // 		//header("Refresh: 3; url=http://www.mecanoviga.com/");
            // 		echo "<h1 style='text-align:center;'> Thankyou we will get in touch with you shortly. </h1>";
            // 		//echo "<h3 style='text-align:center;'> Redirecting in 3 seconds. </h3>";
            // 		//echo "<h3 style='text-align:center;'><img style='width: 6%;' src='loader.gif'></h3>";
            // 	}
        	
        	$mail = new PHPMailer;
        	// SMTP configuration
        	// ----------------------------------------------------------
        	//For server generated mail
         	$mail->isSMTP();
            $mail->Host = 'localhost';
            $mail->SMTPAuth = false;
            $mail->SMTPAutoTLS = false; 
            $mail->Port = 25;
            // -----------------------------------------------------------
            //For SMTP generated mail
            // 	$mail->isSMTP();
            // 	$mail->Host     = 'smtp.gmail.com';
            // 	$mail->SMTPAuth = true;
            // 	$mail->Username = 'nvd@gmail.com';
            // 	$mail->Password = 'test-321';
            // 	$mail->SMTPSecure = 'tls';
            // 	$mail->Port     = 587;
            // -----------------------------------------------------------

        	$mail->From = $email; //'jai@newvisiondigital.in';
        	$mail->FromName = $name; //'Mailer';
        	$mail->addAddress('jai@newvisiondigital.in');
            $mail->addAddress('shivam.singhal@newvisiondigital.co');
            //$mail->addAddress('support@akpisprofessionals.com');
            //$mail->addAddress('iamcashammi@gmail.com');
            //$mail->addAddress('pradeep@newvisiondigital.co');     // Add a recipient
        	$mail->isHTML(true);                                  // Set email format to HTML
        	$mail->Subject = 'AKPIS- EA Course Enquiry ' . $name;
        	$mail->Body    = $mailBody;
        	$mail->AltBody = 'Name: '.$name.', Email: '.$email.', Number: '.$number.', Message: '.$message.'';
        
        	if(!$mail->send()) {
        	    echo 'Message could not be sent.';
        	    echo 'Mailer Error: ' . $mail->ErrorInfo;
        	} else {
        	    header("location:https://akpisprofessionals.com/promotion/new-US-CPA/thankyou.php");
        	    //echo "<h1 style='text-align:center;'> Thankyou we will get in touch with you shortly. </h1>";
        	}
    	}else{
    	    header("location:https://akpisprofessionals.com/promotion/new-US-CPA/");
    	    echo "<h1 style='text-align:center;'>Required Fields are mandatory!. </h1>";
    	}
    }else{
        header("location:https://akpisprofessionals.com/promotion/new-US-CPA/");
    	echo "<h1 style='text-align:center;'>Verify Captcha First!. </h1>";
    }
} else {
    echo "<h1 style='text-align:center;'> OOps somthing went wrong! Please try again latter. </h1>";
}
?>
