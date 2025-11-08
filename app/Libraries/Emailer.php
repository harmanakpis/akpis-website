<?php namespace App\Libraries;

class Emailer
{
    protected $email;

    public function __construct()
    {
        $config = new \Config\Email();
        $config->protocol    = 'smtp';
        $config->SMTPHost    = 'smtp.gmail.com';
        $config->SMTPUser    = 'iamcashammi@gmail.com';
        
        // $config->SMTPUser    = 'harman.akpis@gmail.com';
        // $config->SMTPPass    = 'oqdk oubx tsmh mpio';
        $config->SMTPPass    = 'ycji lynq njdg wlwc';
        $config->SMTPPort    = 587;
        $config->SMTPCrypto  = 'tls';
        $config->mailType    = 'html';
        $config->charset     = 'utf-8';
        $config->wordWrap    = true;
        $config->newline     = "\r\n";

        $this->email = \Config\Services::email();
        $this->email->initialize($config);
    }

    public function send($from, $to, $subject, $message)
    {
        $this->email->setFrom($from);
        $this->email->setTo($to);
        $this->email->setCC('harman.akpis@gmail.com');
        $this->email->setSubject($subject);
        $this->email->setMessage($message);

        $result = $this->email->send();
        $this->email->clear();

        return $result;
    }

    public function getDebugger()
    {
        return $this->email->printDebugger(['headers']);
    }
}
           