<?php

require 'inc/config.php';
require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get(
	'/',
	function () {		
		require_once("view/index.php");
	}
);

$app->get('/gestao-contabil',function (){require_once("view/gestao-contabil.php");});
$app->get('/gestao-de-pessoal',function (){require_once("view/gestao-de-pessoal.php");});
$app->get('/gestao-financeira',function (){require_once("view/gestao-financeira.php");});
$app->get('/gestao-fiscal-tributaria',function (){require_once("view/gestao-fiscal-tributaria.php");});
$app->get('/declaracao-de-imposto-de-renda',function (){require_once("view/declaracao-de-imposto-de-renda.php");});

/**/
$app->get('/abrir-empresa',function (){require_once("view/abrir-empresa.php");});
$app->get('/regularizar-empresa',function (){require_once("view/regularizar-empresa.php");});
$app->get('/migrar-empresa',function (){require_once("view/migrar-empresa.php");});

/**/
$app->get('/escolas',function (){require_once("view/escolas.php");});
$app->get('/pet-shop',function (){require_once("view/pet-shop.php");});
$app->get('/empregador-domestico',function (){require_once("view/empregador-domestico.php");});

// $app->get('/assessoria',function (){require_once("view/assessoria.php");});
// $app->get('/consultoria',function (){require_once("view/consultoria.php");});
// $app->get('/cursos-on-line',function (){require_once("view/cursos-on-line.php");});

$app->get(
	'/noticia',
	function (){
		$sql = new Sql(); 
		$data = $sql->select("SELECT * FROM tb_noticias WHERE idNoticia = {$_REQUEST['id']}");
		echo json_encode($data[0]);
	}
);

$app->run();
