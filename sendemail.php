<?php
require 'vendor/autoload.php';
 
class SendEmail{
     
    public static function SendMail($to,$subject,$content){
            $key = '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';

            $email = new \SendGrid\Mail\Mail();
            $$email->setFrom("melissabarnett90@yahoo.com", "Melissa Barnett");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/plain");

            $sendgrid = new\SendGrid($key);

            try{
                $response = $sendgrid->send($email);
                return $response;

            }catch(Exception $e){
                echo 'Email exception Caught : '. $e->getMessage() . "\n";
                return false; 
            }

    }

}

?>