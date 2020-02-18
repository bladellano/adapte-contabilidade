<?php

include_once "_header.php";
$aUrl = explode("/", $_SERVER['HTTP_REFERER']);
$tituloPg = "MEI";

?>

<div class="bg-pg-default">
    <div class="container">
        <h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
    </div>
</div>

<div class="container pg-content">

    <h3 class="border-bottom border-gray"><?=$tituloPg?></h3>

    <p class="text-justify"><b class="text-primary">Microempreendedor precisa de Contador?</b></p>

    <p class="text-justify">Essa pergunta é frequente, pois, a divulgação de que o MEI não precisa de contador, e realmente não precisa, mas
        há situações que temos que comentar, que fazem diferença em ter o contador lhe auxiliando.</p>

    <p class="text-justify">Muitos MEI micro empreendedor fazem muitas coisas erradas, principalmente com respeito ao uso de nota fiscal
        quando precisam emitir, elaborar declarações, na contratação de funcionário etc. Nesses momentos ajuda de um
        contador auxiliando é essencial.</p>

    <p class="text-justify">Muitos não sabem o limite de comprar, já vi MEI comprando carro com o CNPJ foi excluído e não sabia porque, bom
        tem limite de faturamento e de compra entre outras situações.</p>

    <p class="text-justify">O MEI começa a faturar e passa a movimentar a conta corrente Pessoa Física, então o bicho pega, como separar o
        que é do MEI e o que da Pessoa física? Erro gravíssimo de confusão patrimonial. O fisco adora multar esse tipo
        de erro.</p>

    <p class="text-justify">Nesses e em outros pontos é crucial ter um contador orientado e acompanhando para que você não seja penalizado
        pelo Fisco, parece fácil gerir o MEI, mas olhe todos os detalhes, será que é fácil mesmo? </p>

    <div class="jumbotron">
        <span>Pensando em abrir uma empresa ou precisa de um profissional para cuidar da contabilidade do seu negócio?
            <a href="./#fale-conosco"> Fale com um de nossos especialistas.</a></span>
    </div>
</div>

<?php include_once "_footer.php";?>