<?php  

error_reporting(0);
ini_set(“display_errors”, 0);

session_start();

if(!isset($_SESSION['Usuario'])){ /* VERIFICA SE HÁ SESSÃO */
	header('location:../index.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Conteúdo</title>
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <script src="../js/alertify.js" type="text/javascript"></script>
    <script src="../js/functions.js" type="text/javascript"></script>
    <!-- <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@3.0.4/js/froala_editor.pkgd.min.js'></script> -->
    <script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/pace.css">
    <link rel="stylesheet" href='https://cdn.jsdelivr.net/npm/froala-editor@3.0.4/css/froala_editor.pkgd.min.css' type='text/css'/>
</head>
<body>