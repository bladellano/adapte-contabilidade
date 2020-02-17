<?php 

include_once("_header.php"); 
$aUrl = explode("/",$_SERVER['HTTP_REFERER']);
$tituloPg = "Regularizar Empresa";

?>
<div class="bg-pg-default">
<div class="container">
<h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
</div>
</div>

<div class="container pg-content">

  <h3 class="border-bottom border-gray"><?=$tituloPg?></h3>

  <p class="text-justify">Regularizamos toda situação fiscal da empresa, no que tange a atualização retroativa da escrituração contábil e fiscal, bem como, transmissão de todas obrigações acessórias atrasadas, recálculo de impostos, taxas e contribuições Federal, Estadual e Municipal, para empresas do Simples Nacional, MEI, Lucro Real e Lucro Presumido;</p>  


</div>

<?php include_once("_footer.php"); ?>
