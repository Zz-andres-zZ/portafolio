<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'asset/vendor/autoload.php';

class Mailto {

    private $mail = null;

    public function __construct() {

        //Create an instance; passing `true` enables exceptions
        $this->mail = new PHPMailer(true);

        // Server settings
        $this->mail->isSMTP();                                       //Send using SMTP
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = 'ssl';                             //Enable SMTP authentication
        //$this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                 //Enable verbose debug output
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;       //Enable implicit TLS encryption
        
        $this->mail->Host = '';              //Set the SMTP server to send through
        $this->mail->Port = ;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
        $this->mail->Username = '';  //SMTP username
        $this->mail->Password = '';     //SMTP password
    
    }

    public function setMessage(
        string $fname,
        string $email,
        string $asunto,
        string $message,
    ) {

        try {
            //Recipients
            $this->mail->setFrom('andresjhm.2440@couchwmt.com', $email);
            $this->mail->addAddress('andreshmndz@gmail.com', $fname);     //Add a recipient
            $this->mail->addReplyTo($email, $fname);

            //Content
            $this->mail->isHTML(true);
            $this->mail->Subject = $asunto;
            $this->mail->CharSet = "UTF-8";
            $this->mail->Body = $message;
            /* echo 'Enviado correctamente'; */
            return $this->mail->send();
        } catch (Exception $e) {
            echo "Error al envair:" . $this->mail->ErrorInfo;
            unset($this->mail);
            die();
        }
    }
}
