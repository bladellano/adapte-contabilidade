<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require("vendor/autoload.php");

define('SMTP_USER', 'contato@rosadesaroncolegio.com.br');
// define('SMTP_USER', 'contato@paideiaeducacional.com');
define('SMTP_PASS', 'nt1@2012');
// define('SMTP_PASS', 'Admin2020!');
define('SMTP_HOST', 'mail.rosadesaroncolegio.com.br');
// define('SMTP_HOST', 'mail.paideiaeducacional.com.br');
define('SMTP_PORT', 465); 
// define('SMTP_PORT', 587); 

class Mail{

	public function send($para, $de, $de_nome, $assunto, $corpo) {
		
		$mail = new PHPMailer();
		// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    
		$mail->SMTPSecure = 'ssl';    
		// $mail->SMTPDebug = SMTP::DEBUG_SERVER;   
		$mail->IsSMTP();		// Ativar SMTP
		$mail->CharSet = 'UTF-8';		 
		$mail->isHTML(true); 
		$mail->SMTPAuth = true; // Autenticação		
		$mail->Host = SMTP_HOST;	 
		$mail->Port = SMTP_PORT;  	 
		$mail->Username = SMTP_USER;
		$mail->Password = SMTP_PASS;

		//Variáveis da mensagem, remetente, assunto, mensagem e destinatário.
		$mail->SetFrom($de, $de_nome);
		$mail->Subject = $assunto;
		$mail->Body = $corpo;
		$mail->AddAddress($para);
		$mail->AddAddress('bladellano@yahoo.com.br');

		if(!$mail->Send()) {
			return ['status' => false, 'message' => 'Mensagem não enviada: '.$mail->ErrorInfo];
		} else {
			return ['status' => true, 'message' => 'Mensagem enviada com sucesso!'];
		}
	}
}


