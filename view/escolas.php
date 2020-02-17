<?php 

include_once("_header.php"); 
$aUrl = explode("/",$_SERVER['HTTP_REFERER']);
$tituloPg = "Escolas";

?>
<div class="bg-pg-default">
  <div class="container">
    <h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
  </div>
</div>

<div class="container pg-content">

  <h3 class="border-bottom border-gray"><?=$tituloPg?></h3> 

  <p class="text-justify">A contabilidade para escolas é tão importante e necessária como para as empresas comerciais. Com a ajuda de uma boa contabilidade, as escolas ficam mais organizadas e mantêm sua receita sempre no azul.</p>

  <p class="text-justify">Embora as escolas prestem serviços essenciais e quase sempre estão relacionadas a um bem público, elas não fogem à regra como qualquer outra empresa ou negócio.</p>

  <p class="text-justify">Quando se trata de empreendimentos, sabe-se que quando eles não são bem geridos e não contam com suporte de uma boa empresa de contabilidade, terão sempre problemas com o fisco.</p>

  <p class="text-justify">O profissional que gerencia todos os processos administrativos de uma escola, está cada dia mais enfrentando desafios. Eles são responsáveis pelo controle de inadimplências, organização, fluxo de caixa e as finanças de um modo geral.</p>

  <p class="text-justify">A escolha por uma contabilidade responsável e que tem compromisso com seus clientes faz a diferença na hora de enfrentar esses desafios diários e manter a instituição de ensino sempre alinhada com as leis, por isso a contabilidade escolar, é fundamental.</p>

  <div class="jumbotron">
    <span>Pensando em abrir uma empresa ou precisa de um profissional para cuidar da contabilidade do seu negócio? 
    <a href="./#fale-conosco"> Fale com um de nossos especialistas.</a></span>
  </div>
</div>

<?php include_once("_footer.php"); ?>
