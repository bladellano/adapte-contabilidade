<?php

include_once "_header.php";
$aUrl = explode("/", $_SERVER['HTTP_REFERER']);
$tituloPg = "Advogados";

?>

<div class="bg-pg-default">
    <div class="container">
        <h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
    </div>
</div>

<div class="container pg-content">

    <h3 class="border-bottom border-gray"><?=$tituloPg?></h3>

    <p class="text-justify">Devido à complexidade da legislação ao tratar sobre a abertura e cumprimento das obrigações de uma empresa, cuidar e manter um escritório de advocacia regular pode se tornar um grande desafio. Nesse sentido, contar com uma contabilidade para advogados é essencial!</p>

    <p class="text-justify">Uma assessoria de confiança e que preste um serviço personalizado e adequado às necessidades do escritório é muito importante para o seu funcionamento e desenvolvimento, além das prestações de diversas tarefas burocráticas, por exemplo, corte de gasto, pagamentos de impostos e análises que auxiliam nas tomadas de decisão.</p>

    <p class="text-justify">Quer conhecer os benefícios de contar com o auxílio da contabilidade no seu escritório de advocacia? Atuação conforme a legislação, Escolha do melhor regime de tributação, Aprimoramento do processo de gestão, Cuidado com a parte burocrática, Cumprimento dos prazos, Permite que o advogado foque em sua atividade principal.</p>

    <div class="jumbotron">
        <span>Pensando em abrir uma empresa ou precisa de um profissional para cuidar da contabilidade do seu negócio?
            <a href="./#fale-conosco"> Fale com um de nossos especialistas.</a></span>
    </div>
</div>

<?php include_once "_footer.php";?>