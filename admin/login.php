<?php 

require_once "models/Login.php";
$oUsuario = new Login();
$dados = array(
	$_REQUEST['inputEmail'],
	sha1( $_REQUEST['inputPassword'] )
);

echo $oUsuario->getIdUsuario($dados);

?>