<?php
class Mailer{
    function sendMail(MailGatewayInterface $mg, MailBuilderInterface $mb, MailInterface $mail, AttachmentInterface $attachment){
        $mailContent = $mb->buildMail($mail, $attachment);
        $this->actuallySendMail($mailContent, $mg);
    }
}