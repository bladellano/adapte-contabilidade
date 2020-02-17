<?php 

include_once("_header.php"); 
$aUrl = explode("/",$_SERVER['HTTP_REFERER']);
$tituloPg = "Empregador Doméstico";

?>
<div class="bg-pg-default">
  <div class="container">
    <h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
  </div>
</div>

<div class="container pg-content">

  <h3 class="border-bottom border-gray"><?=$tituloPg?></h3> 

  <p class="text-justify">
    Não importa se você é uma empregada doméstica ou um empregador doméstico. O que importa é estar em conformidade com a legislação. 
  </p>
  <p class="text-justify">
    A Adapt Contabilidade presta toda assessoria necessária para regularização e manutenção das obrigações legais, conforme a Lei complementar 150/2015.
  </p>
  <p>Nossos serviços geram tranquilidade para Empregador e Empregada:</p>
  <ol>
    <li>Folha de Pagamento;</li>
    <li>Holerite;</li>
    <li>Férias;</li>
    <li>13º Salário;</li>
    <li>Cálculo de Horas Extras;</li>
    <li>Contrato de Experiência;</li>
    <li>FGTS;</li>
    <li>INSS;</li>
    <li>Seguro Acidente;</li>
    <li>Rescisão de Contrato;</li>
    <li>Assinatura da CTPS;</li>
    <li>Etc.</li>
  </ol>

  <div class="jumbotron">
    <span>Pensando em abrir uma empresa ou precisa de um profissional para cuidar da contabilidade do seu negócio? 
      <a href="./#fale-conosco"> Fale com um de nossos especialistas.</a></span>
    </div>
  </div>

  <?php include_once("_footer.php"); ?>
