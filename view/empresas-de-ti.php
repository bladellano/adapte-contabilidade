<?php

include_once "_header.php";
$aUrl = explode("/", $_SERVER['HTTP_REFERER']);
$tituloPg = "Empresas de T.I";

?>

<div class="bg-pg-default">
    <div class="container">
        <h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
    </div>
</div>

<div class="container pg-content">

    <h3 class="border-bottom border-gray"><?=$tituloPg?></h3>

    <p class="text-justify">O contador especializado em empresas de TI é a pessoa certa para desempenhar esse papel,
        livrando o gestor e o administrador do negócio de dores de cabeça desnecessárias, possibilitando, assim, uma
        gestão mais precisa e fluida, proporcionando maior economia para o negócio, seja através da redução de gastos ou
        de um planejamento tributário adequado à realidade do negócio.</p>

    <p class="text-justify">As possibilidades são muitas e basta que o profissional e o contador desenvolvam uma relação
        transparente e
        responsável, o que facilita bastante o trabalho e permite que a confiabilidade mútua traga frutos realmente
        duradouros para a empresa.</p>

    <p class="text-justify">Se você está cansado de pagar impostos excessivos e deseja mudar a realidade do seu negócio,
        conquistando o tão
        sonhado equilíbrio financeiro, então os serviços de contabilidade para empresas de TI é perfeito para você.</p>

    <p class="text-justify">Com ele você poderá:</p>

    <ol>
        <li>Reduzir os seus impostos através de métodos legais;</li>
        <li>Obter uma maior facilidade na entrega de todas as Obrigações Fiscais;</li>
        <li>Realizar a Folha de Pagamento;</li>
        <li>Realizar parcelamentos e Recuperação de Crédito Tributário;</li>
        <li>Realizar todas as demonstrações Contábeis;</li>
        <li>Migrar, sem qualquer dificuldade, de Pessoa Física para Jurídica;</li>
    </ol>

    <div class="jumbotron">
        <span>Pensando em abrir uma empresa ou precisa de um profissional para cuidar da contabilidade do seu negócio?
            <a href="./#fale-conosco"> Fale com um de nossos especialistas.</a></span>
    </div>
</div>

<?php include_once "_footer.php";?>