<?php

    // namespace
    use Rain\Tpl;

    //Import PHPMailer classes into the global namespace
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    Class Email 
    {

        private $email;
        private $message;
        private $name;

        public function __construct($email, $name, $message)
        {
            $this->email   = $email;
            $this->name    = $name;
            $this->message = $message;
        }

        public function sendEmail() 
        {
            $html = $this->getTemplete($this->message, $this->name);

            $this->generateEmail($this->email, $this->name, $html);
        }

        private function getTemplete($message, $name)
        {
            // config
            $config = array(
                "tpl_dir"       =>  './templates',
                "cache_dir"     =>  './cache',
                "debug"         => true, // set to false to improve the speed
            );

            Tpl::configure( $config );


            // Add PathReplace plugin (necessary to load the CSS with path replace)
            Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );


            // create the Tpl object
            $tpl = new Tpl;

            $tpl->assign("name", $name);

            // assign a variable
            $tpl->assign( "message", $message );

            // draw the template
            return $tpl->draw("welcome", true);
        }

        private function generateEmail($email, $name, $html)
        {
            //Create a new PHPMailer instance
            $mail = new PHPMailer;

            //Tell PHPMailer to use SMTP
            $mail->isSMTP();

            //Enable SMTP debugging
            // SMTP::DEBUG_OFF = off (for production use)
            // SMTP::DEBUG_CLIENT = client messages
            // SMTP::DEBUG_SERVER = client and server messages
            $mail->SMTPDebug = SMTP::DEBUG_OFF;

            //Set the hostname of the mail server
            $mail->Host = 'smtp.gmail.com';
            // use
            // $mail->Host = gethostbyname('smtp.gmail.com');
            // if your network does not support SMTP over IPv6

            //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
            $mail->Port = 587;

            //Set the encryption mechanism to use - STARTTLS or SMTPS
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

            //Whether to use SMTP authentication
            $mail->SMTPAuth = true;

            //Username to use for SMTP authentication - use full email address for gmail
            $mail->Username = '';

            //Password to use for SMTP authentication
            $mail->Password = '';

            //Set who the message is to be sent from
            $mail->setFrom('', 'Bem vindo');

            //Set an alternative reply-to address
            $mail->addReplyTo('replyto@welcome.com', 'noreply');

            //Set who the message is to be sent to
            $mail->addAddress($email, $name);

            //Set the subject line
            $mail->Subject = 'Welcome';

            //Read an HTML message body from an external file, convert referenced images to embedded,
            //convert HTML into a basic plain-text alternative body
            $mail->msgHTML($html);

            //Replace the plain text body with one created manually
            $mail->AltBody = 'Bem Vindo!!!';

            //Attach an image file
            //$mail->addAttachment('images/phpmailer_mini.png');

            //send the message, check for errors
            if (!$mail->send()) {
                echo json_encode(['error'=>'Mailer Error: '. $mail->ErrorInfo]);
            } else {
                echo json_encode(['msg' => 'Message sent!']);
            }
        }
    }