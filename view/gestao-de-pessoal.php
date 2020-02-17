<?php 

include_once("_header.php"); 
$aUrl = explode("/",$_SERVER['HTTP_REFERER']);
$tituloPg = "Gestão Departamento Pessoal";

?>
<div class="bg-pg-default">
	<div class="container">
		<h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
	</div>
</div>

<div class="container pg-content">

	<h3 class="border-bottom border-gray"><?=$tituloPg?></h3>

	<p class="text-justify">Elaboramos a folha de pagamento dos seus funcionários de acordo com a legislação trabalhista vigente e disponibilizamos relatórios, recibos e guias em meio digital.
	</p>  

</div>

<?php include_once("_footer.php"); ?>
