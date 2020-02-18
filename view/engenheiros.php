<?php

include_once "_header.php";
$aUrl = explode("/", $_SERVER['HTTP_REFERER']);
$tituloPg = "Engenheiros";

?>

<div class="bg-pg-default">
    <div class="container">
        <h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
    </div>
</div>

<div class="container pg-content">

    <h3 class="border-bottom border-gray"><?=$tituloPg?></h3>

    <p class="text-justify">A vida de um engenheiro deve ser uma loucura. São tantos projetos, obras, tantas pessoas a
        gerenciar, uma correria só! Por isso, acreditamos que as rotinas burocráticas das empresas não devem fazer parte
        do seu vocabulário, não é mesmo? E nem precisam!</p>

    <p class="text-justify">A Adapt Contabilidade está aqui justamente para simplificar! Pode continuar se concentrando em seus projetos que
        nós garantimos sua tranquilidade na hora de gerenciar a contabilidade da sua empresa. Entre em contato para
        conhecer melhor nossos serviços e iniciarmos nossa parceria!</p>

    <p class="text-justify">Está querendo abrir uma empresa para se regularizar pelo Simples Nacional mas não sabe se sua atividade se
        enquadra nem quanto custariam os impostos a serem pagos? </p>

    <div class="jumbotron">
        <span>Pensando em abrir uma empresa ou precisa de um profissional para cuidar da contabilidade do seu negócio?
            <a href="./#fale-conosco"> Fale com um de nossos especialistas.</a></span>
    </div>
</div>

<?php include_once "_footer.php";?>