<?php 

require_once("class/Mail.php");
 
$email = new Mail();
$body = '<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Template Email</title>
	<link rel="stylesheet" href="">
</head>
<body bgcolor="#E0E0E0">
	<center>
		<table border=0 width="650px" bgcolor="#FFF" 
		style="font-family: sans serif;box-shadow: 2px 2px 10px #CCC;border:1px solid #999">
		<tr>
			<th align="center" bgcolor="#069" style="color:#FFF"><h3>Formulário de Contato Portal</h3></th>
		</tr>
		<tr>
			<td>
				<table width="100%" style="padding:20px">
					<tr>
						<td  align="right" width="30%"><b>Nome:</b></td>
						<td width="70%">'.$_POST['nome'].'</td>
					</tr>
					<tr>
						<td  align="right" width="30%"><b>E-mail:</b></td>
						<td width="70%">'.$_POST['email'].'</td>
					</tr>
					<tr>
						<td  align="right" width="30%"><b>Telefone:</b></td>
						<td width="70%">'.$_POST['telefone'].'</td>
					</tr>
					<tr>
						<td  align="right" valign="top" width="30%"><b>Mensagem:</b></td>
						<td width="70%">'.$_POST['mensagem'].'</td>
					</tr>

				</table>

			</td>
		</tr>
		<tr>
			<td align="center"><p style="color:#999">
				© 2020 Paideia Educacional. Todos os direitos reservados.<br/>
				Enviado a partir:'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'<br/>
				Ip de envio:'.$_SERVER['SERVER_ADDR'].'
			</p></td>
		</tr>
	</table>
</center>
</body>
</html>';

// $result = $email->send("bladellano@gmail.com",$_POST['email'],$_POST['nome'],"Formulário de Contato Portal",$body);
$result = $email->send("diretor@paideiaeducacional.com",$_POST['email'],$_POST['nome'],"Formulário de Contato Portal",$body);

var_dump($result);

