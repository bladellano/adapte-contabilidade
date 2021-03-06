<div id="footer">
  <div class="container-fluid">
    <div class="row">
     <div class="col-md-3">
       <img class="logo-footer" src="assets/img/logo-adapte-contabilidade-branco.png" alt="">
       <p>Contato:<br/>
        <i class="fas fa-phone"></i> (91) 9 98863 2966  <br/>
        Horário de Funcionamento: Comercial<br/>
      Responsável pela empresa: Domingos</p>
      <p><i class="fas fa-map-pin"></i> Endereço Rua São Jorge número 63 | Cep: 66645-120 | Castanheira - Belém - Pará </p>
      <p><i class="fas fa-envelope"></i> contato@adaptcontabilidade.com.br</p>

      <a href="#" target="_blank" class="icon-socials">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#" target="_blank" class="icon-socials">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="#" target="_blank" class="icon-socials">
        <i class="fab fa-youtube"></i>
      </a>

    </div>
    <div class="col-md-3 d-none d-sm-block">
      <h3>Notícias</h3>
      <ul>
        <?php 

        $sql = new Sql(); 
        $data['noticias'] = $sql->select("SELECT * FROM tb_noticias ORDER BY idNoticia DESC LIMIT 4");

        foreach ($data['noticias'] as $noticia):
          extract($noticia);
          ?>
          <li><a href="#" data-toggle="modal" data-target="#modalNoticia" data-id="<?=$idNoticia?>"><?=$tituloNoticia?></a></li>
          <?php
        endforeach;        
        ?>

      </ul>
    </div>
    <div class="col-md-3 d-none d-sm-block">
      <h3>Acesso Rápido</h3>
      <ul>
        <li><a href="abrir-empresa">ABRIR EMPRESA</a></li>
        <li><a href="migrar-empresa">MIGRAR EMPRESA</a></li>
        <li><a href="regularizar-empresa">REGULARIZAR EMPRESA</a></li>
        <li><a href="pet-shop">PET SHOP</a></li>
        <li><a href="advogados">ADVOGADOS</a></li>
        <li><a href="medicos-e-dentistas">MÉDICOS E DENTISTAS</a></li>
        <li><a href="mei">MEI</a></li>
      </ul></div>
      <div class="col-md-3 d-none d-sm-block">


<!--         <div class="fb-page" data-href="https://www.facebook.com/paideiaeducacionalpa/" data-tabs="timeline" data-width="" data-height="460px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/paideiaeducacionalpa/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/paideiaeducacionalpa/">Paideia Educacional</a></blockquote>
</div> -->


<h3>Ligamos para você</h3>
<p>Deixe seu nome e número de telefone que ligamos para você.</p>
<form id="form-contato">
  <input type="text" class="form-control form-control-sm" placeholder="Nome:" name="nome_">
  <input type="email" class="form-control form-control-sm" placeholder="E-mail:" name="email_">
  <input type="tel" class="form-control form-control-sm" placeholder="Telefone:" name="telefone_"> 
  <button id="btn-contato" class="btn btn-danger btn-block btn-sm">ENVIAR</button>
</form>


</div>
</div>
</div>
</div>

<div id="assign">
  <div class="container">
    © FireFly. <?=date('Y')?> Adapt Contabilidade. Todos os direitos reservados.
    <br/>Desenvolvimento by <a href="https://api.whatsapp.com/send?phone=5591982650277" target="_blank">
      <img data-toggle="tooltip" data-placement="top" title="Contato: (91) 98265-0277" src="assets/img/fire-logo.png" alt="Logo FireFly">
    </a></div>
  </div>

</section>

<div class="topo">
  <i class="fas fa-chevron-up"></i>
</div>

<script src="lib/jquery/jquery.js"></script>
<script src="lib/bootstrap/popper.min.js"></script>
<script src="lib/bootstrap/bootstrap.min.js"></script>
<script src="lib/owl-carousel/owl.carousel.min.js"></script>
<script src="lib/slick/slick.min.js"></script>
<script src="lib/mask/jquery.mask.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script src="https://unpkg.com/scrollreveal"></script>

<script src="assets/js/main.js"></script>

<script>
  $(document).ready(function() {

    $('.slick-parceiros').slick({
      infinite: true,
      slidesToShow: 6,
      // centerMode: true,
      arrows:false,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
        }
      }]
    });

    $('.slick-depoimentos').slick({
      autoplay:true
    });

    $('[data-toggle="tooltip"]').tooltip()

    $("#owl-demo").owlCarousel({
      navigation: true, // Show next and prev buttons
      slideSpeed: 300,
      paginationSpeed : 400,
      singleItem:true,
      navigation:false,
      autoPlay:true
    });

  });
</script>

</body>

</html>
