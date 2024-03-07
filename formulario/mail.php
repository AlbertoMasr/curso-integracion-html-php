<?php

  use PHPMailer\PHPMailer\PHPMailer;

  require_once("vendor/autoload.php");

  /**
   * Send a email
   * @param string $subject
   * @param string $body
   * @param string $email
   * @param string $name
   * @param bool $html
  **/
  function sendEmail(string $subject, string $body, string $email, string $name, bool $html = false) {
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '75e3ed3375b58f';
    $phpmailer->Password = '87b64d08d0b26b';

    //Recipients
    $phpmailer->setFrom('contact@miempresa', 'Mi empresa');
    $phpmailer->addAddress($email, $name);

    //Content
    $phpmailer->isHTML($html);
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    $phpmailer->send();
  }

?>
