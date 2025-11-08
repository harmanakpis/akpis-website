<?php
namespace App\Libraries;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once(APPPATH . 'Libraries/mailer/src/Exception.php');
require_once(APPPATH . 'Libraries/mailer/src/PHPMailer.php');
require_once(APPPATH . 'Libraries/mailer/src/SMTP.php');

class Sendmail {

    public function email($params = array()) {   
        $mail = new PHPMailer;

         $mail->isSMTP();
         $mail->Host     = 'smtp-relay.brevo.com';
         $mail->SMTPAuth = true;
         $mail->Username = 'iamcashammi@gmail.com';
         $mail->Password = 'tnRQrEOMdpTYmvsw';
         $mail->SMTPSecure = 'tls';
         $mail->Port     = 587;

        // ----------------------------------------------------------
         /* $mail->isSMTP();
          $mail->Host = 'localhost';
          $mail->SMTPAuth = false;
          $mail->SMTPAutoTLS = false; 
          $mail->Port = 25;*/
        // -----------------------------------------------------------

        $mail->isHTML(true);   // Set email format to HTML   

        if(array_key_exists("from", $params) && array_key_exists("from_name", $params)){
          $mail->From = $params['from'];
          $mail->FromName = $params['from_name'];
        } else if(array_key_exists("from", $params)){
          $mail->From = $params['from'];
        } else {
          $mail->From = 'info@akpisprofessionals.com';
          $mail->FromName = 'AKPIS';
        }

        if(array_key_exists('to', $params) && is_array($params['to'])){
          foreach ($params['to'] as $to) {
            $mail->addAddress($to);      // Name is optional
          }
        } else if(array_key_exists('to', $params)) {
          $mail->addAddress($params['to']);      // Name is optional
        }

        if(array_key_exists('cc', $params) && is_array($params['cc'])){
           foreach ($params['cc'] as $cc) {
             $mail->addCc($cc);      // Name is optional
           }
        } else if(array_key_exists('cc', $params)) {
           $mail->addCc($params['cc']);
        }

        if(array_key_exists('bcc', $params) && is_array($params['bcc'])){
           foreach ($params['bcc'] as $bcc) {
             $mail->addBcc($bcc);      // Name is optional
           }
        } else if(array_key_exists('bcc', $params)) {
           $mail->addBcc($params['bcc']);
        }

        if(array_key_exists('reply_to', $params)){
          $mail->addReplyTo($params['reply_to']);
        }

        if(array_key_exists('subject', $params)){
          $mail->Subject = $params['subject'];
        }

        if(array_key_exists('message', $params)){
          $mail->Body = $params['message'];
          $mail->AltBody = 'Msessage not support html format';
        }

        if(array_key_exists('message', $params) && array_key_exists('to', $params)){
            if(!$mdata = $mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
                // exit;
            } else {
                //echo '<pre>'; print_r($mail); exit;
                return true;
            }
        } else {
            return false;
        }       
    }

}
