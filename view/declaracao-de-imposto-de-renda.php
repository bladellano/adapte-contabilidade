<?php 

include_once("_header.php"); 
$aUrl = explode("/",$_SERVER['HTTP_REFERER']);
$tituloPg = "Declaração de Imposto de Renda";

?>
<div class="bg-pg-default">
  <div class="container">
    <h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
  </div>
</div>

<div class="container pg-content">

  <h3 class="border-bottom border-gray"><?=$tituloPg?></h3>

  <p class="text-justify">Todo o ano existe o período de entrega da declaração de IRPF – Imposto de Renda Pessoa Física, onde os contribuintes deverão declarar seus rendimentos e bens, pagando o imposto devido ou apurando a restituição. Este ano o prazo para declarar imposto de renda inicia-se no dia 01º de março e termina em 30 de abril 2020.</p>  
  <p class="text-justify"> Para maior comodidade de quem precisa declarar o IRPF, a ADAPT CONTABILIDADE possui uma uma equipe é montada especialmente para o período, a qual é sempre atualizada, possibilitando suporte com análise de caixa, respeitando os prazos determinados, o sigilo das informações e ética profissional.
  </p>  

</div>

<?php include_once("_footer.php"); ?>
