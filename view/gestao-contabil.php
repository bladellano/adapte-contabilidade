<?php 

include_once("_header.php"); 
$aUrl = explode("/",$_SERVER['HTTP_REFERER']);
$tituloPg = "Gestão Contábil";

?>
<div class="bg-pg-default">
  <div class="container">
    <h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
  </div>
</div>

<div class="container pg-content">

  <h3 class="border-bottom border-gray"><?=$tituloPg?></h3>

  <p class="text-justify">Elaboramos todas as rotinas da área contábil e elaboração das demonstrações contábeis que são disponibilizadas conforme a necessidade da empresa através de balancetes e relatórios periódicos para auxílio na tomada de decisões.
  </p>
  

</div>

<?php include_once("_footer.php"); ?>
