<?php 

include_once("_header.php"); 
$aUrl = explode("/",$_SERVER['HTTP_REFERER']);
$tituloPg = "Abrir Empresa";

?>
<div class="bg-pg-default">
  <div class="container">
    <h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
  </div>
</div>

<div class="container pg-content">

  <h3 class="border-bottom border-gray"><?=$tituloPg?></h3>

  <p class="text-justify">Realizamos todo o processo de abertura da empresa de forma rápida e segura. No enquadramento que se encaixe na sua necessidade e atenda suas expectativas futuras de crescimento pensando sempre na proteção e expansão do seu patrimônio.</p>  


</div>

<?php include_once("_footer.php"); ?>
