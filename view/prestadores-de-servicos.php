<?php

include_once "_header.php";
$aUrl = explode("/", $_SERVER['HTTP_REFERER']);
$tituloPg = "Prestadores de Serviços";

?>

<div class="bg-pg-default">
    <div class="container">
        <h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
    </div>
</div>

<div class="container pg-content">

    <h3 class="border-bottom border-gray"><?=$tituloPg?></h3>

    <p class="text-justify">Prestadores de Serviços são profissionais ou grupo de profissionais que realizam uma atividade lícita, executada a título de locação da mão-de-obra física ou intelectual, da utilização de energia humana, material ou imaterial; ou seja, é cada vez maior o número de empresas e profissionais prestadores de serviços no atual contexto econômico vigente.</p>

    <p class="text-justify">A contabilidade e seus profissionais exercem papel fundamental na orientação aos prestadores de serviços, no que se refere à organização e estruturação contábil de suas respectivas empresas, assim como no planejamento fiscal e financeiro.</p>

    <p class="text-justify">Prestadores de serviços necessitam informações e orientações profissionais, que farão diferença quando seus respectivos negócios estiverem no mercado, como por exemplo, o enquadramento no correto regime tributário.</p>

    <p class="text-justify">A contabilidade é uma ferramenta de gestão, que vem agregar aos prestadores de serviços, a projeção de resultados dos seus respectivos negócios a partir de metas planejadamente traçadas, informações e conhecimento exato sobre encargos, obrigações legais, contábeis e fiscais aos quais suas atividades estarão sujeitas.</p>

    <div class="jumbotron">
        <span>Pensando em abrir uma empresa ou precisa de um profissional para cuidar da contabilidade do seu negócio?
            <a href="./#fale-conosco"> Fale com um de nossos especialistas.</a></span>
    </div>
</div>

<?php include_once "_footer.php";?>