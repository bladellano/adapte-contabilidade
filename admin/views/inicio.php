 <?php 
 require_once "_header.php";
 require_once "menu.php"; 
 ?> 
 
 <div class="container">
 	<div class="breadcrumb"> 		
 		Seja bem-vindo(a) <strong> <?=$_SESSION['Usuario']['nome']?>.</strong> 	
 	</div>

 	<div class="row">
 		<div class="col-md-2"><a href="https://mylivechat.com/dashboard/welcome.ascx" target="_blank" class="box-link" style="background:#2ECC71"><i class="fa fa-comments-o" aria-hidden="true"></i> Mylivechat</a>
 			<span class="btn-show-details"></span>
 			<div class="show-details">
 				<b>Usuário:</b><br> adaptcontabilidade@gmail.com<br>
 				<b>Senha:</b><br>xRlKq#u^bx
 			</div> 
 		</div>
 		<div class="col-md-2"><a href="https://mail.google.com" target="_blank" class="box-link" style="background:#FF7979"><i class="fa fa-envelope-o" aria-hidden="true"></i> Gmail</a>
 			<span class="btn-show-details"></span>
 			<div class="show-details">
 				<b>Usuário:</b><br> adaptcontabilidade@gmail.com<br>
 				<b>Senha:</b><br>xRlKq#u^bx
 			</div> 
 		</div>
 		<div class="col-md-2"><a href="https://www.youtube.com/channel/UCIEK_ruf_iQppFmu-zBHY7Q" target="_blank" target="_blank" class="box-link" style="background:#C0392B"><i class="fa fa-youtube" aria-hidden="true"></i> Youtube</a>
 			<span class="btn-show-details"></span>
 			<div class="show-details">
 				<b>Usuário:</b><br> adaptcontabilidade@gmail.com<br>
 				<b>Senha:</b><br>xRlKq#u^bx
 			</div> 
 		</div>
 		<div class="col-md-2"><a href="http://facebook.com/" target="_blank" class="box-link" style="background:#3498DB"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a>
 			<span class="btn-show-details"></span>
 			<div class="show-details">
 				<p class="alert alert-info">Em analise...</p>
 				<!-- <b>Usuário:</b><br> adaptcontabilidade@gmail.com<br> -->
 				<!-- <b>Senha:</b><br>xRlKq#u^bx -->
 			</div> 
 		</div>
 		<div class="col-md-2"><a href="https://analytics.google.com/analytics/web/" target="_blank" class="box-link" style="background:#F9CA24"><i class="fa fa-line-chart" aria-hidden="true"></i> Analytics</a>
 			<span class="btn-show-details"></span>
 			<div class="show-details">
 				<p class="alert alert-success">Serviço ativado</p>
 				<p class="text-center">Mude para conta Gmail<br>da Adapt Contabilidade</p>
 				<!-- <b>Usuário:</b><br> adaptcontabilidade@gmail.com<br> -->
 				<!-- <b>Senha:</b><br>xRlKq#u^bx -->
 			</div> 
 		</div>
 		<div class="col-md-2"><a href="https://webmail.umbler.com/" target="_blank" class="box-link" style="background:#8E44AD"><i class="fa fa-envelope" aria-hidden="true"></i> Webmail</a>
 			<span class="btn-show-details"></span>
 			<div class="show-details">
 				<b>Usuário:</b><br> contato@adaptcontabilidade.com.br<br>
 				<b>Senha:</b><br>#vO?Pm5{,9
 			</div> 
 		</div>
 	</div>
 	<div class="row">
 		<p class="alert alert-warning">Prezado(a), <?=$_SESSION['Usuario']['nome']?>.<br>
 		Os links acima são referentes aos serviços habilitados para seu site, utilize de forma cuidadosa ao acessar e não repassar suas credencias para terceiros  que você não possua absoluta confiança, uma vez que todos os dados de acesso estão disponiveis nesta tela principal, como usuário e senha.</p>
 	</div>
 </div>
 <?php require_once "_footer.php" ?>

 <script>
 	$(function(){


 	});
 </script>