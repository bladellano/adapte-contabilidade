<?php

include_once "_header.php";
$aUrl = explode("/", $_SERVER['HTTP_REFERER']);
$tituloPg = "Salão de Beleza";

?>

<div class="bg-pg-default">
    <div class="container">
        <h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
    </div>
</div>

<div class="container pg-content">

    <h3 class="border-bottom border-gray"><?=$tituloPg?></h3>

    <p class="text-justify">Quando o assunto é Contabilidade para Salão de beleza, há vários aspectos que devem ser
        considerado para o proprietário cresce e lucrar, do jeito certo.</p>

    <p class="text-justify">Os aspectos financeiros e contábeis de um salão de beleza requer atenção especial para não
        expor o empresário ou empresária do ramo a riscos trabalhistas, uma vez que é natural a informalidade neste
        setor.</p>

    <p class="text-justify">Nossa assessoria contábil para salão de belezas e clínicas de estética é completa e
        consultiva, para ajudar a empresa a lidar de forma tranquila com todos os aspectos legais, e tributários.</p>

    <p class="text-justify">Cuidamos de toda a burocracia para que você foque no mais importante para as empresas de
        estética e salão de beleza: Atender bem!</p>

    <div class="jumbotron">
        <span>Pensando em abrir uma empresa ou precisa de um profissional para cuidar da contabilidade do seu negócio?
            <a href="./#fale-conosco"> Fale com um de nossos especialistas.</a></span>
    </div>
</div>

<?php include_once "_footer.php";?>