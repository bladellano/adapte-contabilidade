<?php

include_once "_header.php";
$aUrl = explode("/", $_SERVER['HTTP_REFERER']);
$tituloPg = "Representantes Comerciais";

?>

<div class="bg-pg-default">
    <div class="container">
        <h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
    </div>
</div>

<div class="container pg-content">

    <h3 class="border-bottom border-gray"><?=$tituloPg?></h3>

    <p class="text-justify">A contabilidade para representante comercial é um ramo da contabilidade que trabalha para o profissional que atua diretamente com as vendas de um ou mais produtos, conservando, sempre boa, a imagem da empresa que está representando. O contador que trabalha com esse nicho específico deve se preocupar com diversas tributações e processos burocráticos, pois há algumas particularidades do segmento, já que o representante pode trabalhar como pessoa física ou pessoa jurídica.</p>

    <p class="text-justify">O contador que lida com esse nicho, tem como objetivo prestar o suporte necessário para a empresa crescer. Assim, ele auxiliará na parte fiscal contábil, trabalhista e legal e ajudará em toda parte de tomada de decisões sempre visando o crescimento de seu empreendimento. Portanto, o serviço de contabilidade para representante comercial deve ser efetivo e trazer sempre o melhor para seu cliente.</p>
    
    <div class="jumbotron">
        <span>Pensando em abrir uma empresa ou precisa de um profissional para cuidar da contabilidade do seu negócio?
            <a href="./#fale-conosco"> Fale com um de nossos especialistas.</a></span>
    </div>
</div>

<?php include_once "_footer.php";?>