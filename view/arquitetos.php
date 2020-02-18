<?php

include_once "_header.php";
$aUrl = explode("/", $_SERVER['HTTP_REFERER']);
$tituloPg = "Arquitetos";

?>

<div class="bg-pg-default">
    <div class="container">
        <h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
    </div>
</div>

<div class="container pg-content">

    <h3 class="border-bottom border-gray"><?=$tituloPg?></h3>

    <p class="text-justify">Para que uma empresa de arquitetura tenha sucesso, é preciso saber mais do que apenas criar
        projetos incríveis.</p>
    <p class="text-justify">Manter um negócio saudável, lucrativo e regularizado é uma tarefa que pode ser facilitada
        por meio de uma boa
        Contabilidade e de algumas tarefas do setor financeiro. Independentemente do tamanho do empreendimento, a
        Contabilidade é fundamental para garantir um controle financeiro e econômico eficiente.</p>

    <p class="text-justify">É ela que coleta, organiza e mensura os dados referentes à movimentação patrimonial da
        empresa.</p>
    <p class="text-justify">A Contabilidade permite que se faça um planejamento tributário por meio das informações
        coletadas, tais como
        valor de ativos, receitas, despesas, rentabilidade, lucratividade, produtividade etc.</p>
    <p class="text-justify">A Contabilidade é importante também para os processos de tomada de decisão. Isso porque, em
        posse dos dados
        contábeis, a empresa consegue visualizar onde é preciso cortar gastos e reduzir custos, ou se vale a pena fazer
        novos investimentos, por exemplo.
        Os aspectos burocráticos que envolvem a abertura de um negócio também são responsabilidade do setor contábil, o
        qual previne irregularidades e evita que o gestor pague taxas e impostos mais altos. </p>

    <div class="jumbotron">
        <span>Pensando em abrir uma empresa ou precisa de um profissional para cuidar da contabilidade do seu negócio?
            <a href="./#fale-conosco"> Fale com um de nossos especialistas.</a></span>
    </div>
</div>

<?php include_once "_footer.php";?>