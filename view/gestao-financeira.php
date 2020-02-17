<?php 

include_once("_header.php"); 
$aUrl = explode("/",$_SERVER['HTTP_REFERER']);
$tituloPg = "Gestão Financeira";

?>
<div class="bg-pg-default">
  <div class="container">
    <h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
  </div>
</div>

<div class="container pg-content">

  <h3 class="border-bottom border-gray"><?=$tituloPg?></h3>

  <p class="text-justify">Terceirização do departamento financeiro ou implantação de gestão financeira na sua empresa. Gestão de contas a pagar e a receber, emissão de notas fiscais, conciliação financeira diária, gestão do fluxo de caixa, relatórios financeiros com painel de indicadores (dashboard) e aconselhamento financeiro focado em melhoria de resultados.
  </p>  

</div>

<?php include_once("_footer.php"); ?>
