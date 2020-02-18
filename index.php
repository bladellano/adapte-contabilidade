<?php

require 'inc/config.php';
require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get(
    '/',
    function () {
        require_once ("view/index.php");
    }
);

$app->get('/gestao-contabil', function () {require_once ("view/gestao-contabil.php");});
$app->get('/gestao-de-pessoal', function () {require_once ("view/gestao-de-pessoal.php");});
$app->get('/gestao-financeira', function () {require_once ("view/gestao-financeira.php");});
$app->get('/gestao-fiscal-tributaria', function () {require_once ("view/gestao-fiscal-tributaria.php");});
$app->get('/declaracao-de-imposto-de-renda', function () {require_once ("view/declaracao-de-imposto-de-renda.php");});

/**/
$app->get('/abrir-empresa', function () {require_once ("view/abrir-empresa.php");});
$app->get('/regularizar-empresa', function () {require_once ("view/regularizar-empresa.php");});
$app->get('/migrar-empresa', function () {require_once ("view/migrar-empresa.php");});

/**/
$app->get('/escolas', function () {require_once ("view/escolas.php");});
$app->get('/pet-shop', function () {require_once ("view/pet-shop.php");});
$app->get('/empregador-domestico', function () {require_once ("view/empregador-domestico.php");});
$app->get('/mei', function () {require_once ("view/mei.php");});
$app->get('/prestadores-de-servicos', function () {require_once ("view/prestadores-de-servicos.php");});
$app->get('/advogados', function () {require_once ("view/advogados.php");});
$app->get('/medicos-e-dentistas', function () {require_once ("view/medicos-e-dentistas.php");});
$app->get('/empresas-de-ti', function () {require_once ("view/empresas-de-ti.php");});
$app->get('/engenheiros', function () {require_once ("view/engenheiros.php");});
$app->get('/representantes-comerciais', function () {require_once ("view/representantes-comerciais.php");});
$app->get('/arquitetos', function () {require_once ("view/arquitetos.php");});
$app->get('/salao-de-beleza', function () {require_once ("view/salao-de-beleza.php");});
 

$app->get(
    '/noticia',
    function () {
        $sql = new Sql();
        $data = $sql->select("SELECT * FROM tb_noticias WHERE idNoticia = {$_REQUEST['id']}");
        echo json_encode($data[0]);
    }
);

$app->run();