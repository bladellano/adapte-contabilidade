<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require("vendor/autoload.php");

define('SMTP_USER', 'contato@adaptcontabilidade.com.br');
define('SMTP_PASS', '#vO?Pm5{,9');
define('SMTP_HOST', 'smtp.umbler.com');
define('SMTP_PORT', 587);  

class Mail{

	public function send($para, $de, $de_nome, $assunto, $corpo) {	 

		$mail = new PHPMailer();
		$mail->IsSMTP();		/*ATIVAR SMTP*/
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
		 $mail->SMTPDebug = SMTP::DEBUG_SERVER;  
		$mail->CharSet = 'UTF-8';		 
		$mail->isHTML(true); 
		$mail->SMTPAuth = true; /*AUTENTICAÇÃO*/		
		/*CREDENCIAIS*/
		$mail->Host = SMTP_HOST;	 
		$mail->Port = SMTP_PORT;  	 
		$mail->Username = SMTP_USER;
		$mail->Password = SMTP_PASS;

		/*VARIÁVEIS DA MENSAGEM, REMETENTE, ASSUNTO, MENSAGEM E DESTINATÁRIO.*/

		$mail->SetFrom($para, $de_nome);
		$mail->Subject = $assunto;
		$mail->Body = $corpo;
		$mail->AddAddress($para);
		$mail->AddReplyTo($de, $de_nome);

		if(!$mail->Send()) {
			return ['status' => false, 'message' => 'Mensagem não enviada: '.$mail->ErrorInfo];
		} else {
			return ['status' => true, 'message' => 'Mensagem enviada com sucesso!'];
		}
	}
}


