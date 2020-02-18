<?php

include_once "_header.php";
$aUrl = explode("/", $_SERVER['HTTP_REFERER']);
$tituloPg = "Médicos e Dentistas";

?>

<div class="bg-pg-default">
    <div class="container">
        <h6><a href="./">Home</a> &raquo; <a href="<?=end($aUrl)?>"><?=$tituloPg?></a></h6>
    </div>
</div>

<div class="container pg-content">

    <h3 class="border-bottom border-gray"><?=$tituloPg?></h3>

    <p class="text-justify">Mesmo que você seja médico ou outro profissional da área da saúde com pessoa física, precisa da contabilidade para direcionar os seus rendimentos tributáveis. Sem esta ferramenta de controle contábil, não é possível fazer uma boa gestão das suas finanças ou mesmo do seu consultório. A vida corrida dos médicos e profissionais da saúde já é bem conhecida. Com cargas horárias bastante elevadas, o tempo para outras atividades ficam bem reduzido. Ter um auxílio de um profissional especializado, faz toda a diferença na economia tributária e Realizar a gestão financeira requer também muito trabalho e principalmente conhecimentos específicos. Quando um médico ou outro profissional realiza o seu trabalho não tem tempo para fazer uma boa gestão das suas finanças.</p>

    <div class="jumbotron">
        <span>Pensando em abrir uma empresa ou precisa de um profissional para cuidar da contabilidade do seu negócio?
            <a href="./#fale-conosco"> Fale com um de nossos especialistas.</a></span>
    </div>
</div>

<?php include_once "_footer.php";?>