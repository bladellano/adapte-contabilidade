<?php 

include_once("_header.php"); 
$aUrl = explode("/",$_SERVER['HTTP_REFERER']);
$tituloPg = "Migrar Empresa";

?>
<div class="bg-pg-default">
  <div class="container">
    <h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
  </div>
</div>

<div class="container pg-content">

  <h3 class="border-bottom border-gray"><?=$tituloPg?></h3>

  <p class="text-justify"><h2 class="display-2 text-success">Mude para a Adapt Contabilidade</h2><br> Que tal migrar a contabilidade da sua empresa para a contabilidade digital?  
  </p>  
  <p class="text-justify">Para que esse processo de transição seja feito corretamente, algumas obrigações e documentos devem ser entregues, mantendo a organização financeira da empresa. Na Adapt Contabilidade cuidamos de todo este procedimento para você de forma rápida e descomplicada. Fale com a gente para saber mais sobre o serviço de Migração de Contabilidade que oferecemos.</p>

</div>

<?php include_once("_footer.php"); ?>
