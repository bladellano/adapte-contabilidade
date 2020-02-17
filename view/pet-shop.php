<?php 

include_once("_header.php"); 
$aUrl = explode("/",$_SERVER['HTTP_REFERER']);
$tituloPg = "Pet Shop";

?>
<div class="bg-pg-default">
  <div class="container">
    <h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
  </div>
</div>

<div class="container pg-content">

  <h3 class="border-bottom border-gray"><?=$tituloPg?></h3> 

  <p class="text-justify">A contabilidade para pet shop pode ir muito além do cumprimento de todas as obrigações legais e ajudá-lo a alavancar o seu negócio. Com todos os conhecimentos de um profissional da contabilidade, é possível otimizar a gestão do seu pet shop e auferir melhores resultados financeiros. Optar por uma contabilidade especializada em pet shop permite que os resultados obtidos sejam ainda melhores – afinal, o contador conhece todos os processos internos comuns nesse segmento. Dessa forma, fica mais fácil solucionar os seus principais problemas e alavancar o seu negócio.</p>

    <div class="jumbotron">
    <span>Pensando em abrir uma empresa ou precisa de um profissional para cuidar da contabilidade do seu negócio? 
    <a href="./#fale-conosco"> Fale com um de nossos especialistas.</a></span>
  </div>
</div>

<?php include_once("_footer.php"); ?>
