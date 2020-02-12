 <?php 
 require_once "_header.php";
 require_once "menu.php"; 
 ?>
 <div class="container">
 	Seja bem-vindo <strong><?=$_SESSION['Usuario']['nome']?>.</strong> 	
 	<?php 
 	// echo '<pre>'; print_r($_SESSION); echo '</pre>'; 	
 	?>

 	<div class="row">
 		<div class="col-md-2"><a href="#" class="box-link" style="background:#2ECC71">Mylivechat</a></div>
 		<div class="col-md-2"><a href="#" class="box-link" style="background:#3498DB">Instagram</a></div>
 		<div class="col-md-2"><a href="#" class="box-link" style="background:#8E44AD">Youtube</a></div>
 		<div class="col-md-2"><a href="#" class="box-link" style="background:#E67E22">Facebook</a></div>
 		<div class="col-md-2"><a href="#" class="box-link" style="background:#C0392B">Analytics</a></div>
 		<div class="col-md-2"><a href="#" class="box-link" style="background:#F39C12">Webmail</a></div>
 	</div>
 </div>
 <?php require_once "_footer.php" ?>
 