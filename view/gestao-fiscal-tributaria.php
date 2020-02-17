<?php 

include_once("_header.php"); 
$aUrl = explode("/",$_SERVER['HTTP_REFERER']);
$tituloPg = "Gestão Fiscal Tributária";

?>
<div class="bg-pg-default">
  <div class="container">
    <h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
  </div>
</div>

<div class="container pg-content">

  <h3 class="border-bottom border-gray"><?=$tituloPg?></h3>

  <p class="text-justify">Realizamos o gerenciamento dos aspectos tributários da sua empresa através da escrituração fiscal, apuração de impostos, entrega de declarações obrigatórias e planejamento tributário para pequenas empresas e profissionais liberais.
  </p>  

</div>

<?php include_once("_footer.php"); ?>
