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


$app->get('/assessoria',function (){require_once("view/assessoria.php");});
$app->get('/consultoria',function (){require_once("view/consultoria.php");});
$app->get('/cursos-on-line',function (){require_once("view/cursos-on-line.php");});

$app->get(
  '/produtos',
  function (){
   $sql = new Sql(); 
   $data = $sql->select("SELECT * FROM tb_usuarios");
   echo json_encode($data);
 }
);

$app->run();
