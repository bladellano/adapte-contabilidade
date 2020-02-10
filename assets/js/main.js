
(function(doc, win) {

    'use strict';

    /* POPULANDO MODAL NOTÍCIAS */
    $('a[data-toggle="modal"][data-target="#modalNoticia"]').on('click',function(){
        let id = $(this).data('id');
        $.ajax({
            url: 'noticia',
            type: 'GET',
            dataType: 'json',
            data: {id},
            success:function(r){
                 $('.show-titulo,.modal-title').html(`<p><b>${r.tituloNoticia.toUpperCase()}</b></p>`);
                 $('.show-conteudo').html(`<p>${r.conteudo}</p>`);
            }
        });
        
    });


    /* MASCARA PARA O CAMPO TELEFONE */
    $('input[name="telefone"],input[name="telefone_"]').mask('(00) 00000-0000');

    /* VALIDAÇÃO DE FORMULÁRIO SERVIÇOS */

    $('#form-contato-adapte').submit(function(e) {
        e.preventDefault();

        const data = $(this).serializeArray();
        const aVazios = [];
        data.forEach(function(e) {
            if (!e.value) {
                aVazios.push(e.name);
            }
        });

        if (aVazios.length) {
            let s = aVazios.length > 1 ? '(S)' : '';
            return alertify.error(`PREENCHA CORRETAMENTE O${s} CAMPO${s} ${aVazios.join(', ').toUpperCase()}.`);
        }

        let camposForm = $('#form-contato-adapte :input');

        $.ajax({
            type: "POST",
            url: "send-mail-proposta.php",
            data: data,
            dataType: "json",
            beforeSend: function() {
                camposForm.prop('disabled', true);
            },
            success: function(r) {
                if (r.status == true) {
                    camposForm.prop('disabled', false);
                    $('#form-contato-adapte')[0].reset();
                    return alertify.alert(`SUCESSO`, 'PROPOSTA ENVIADA COM SUCESSO! EM BREVE ENTRAREMOS EM CONTATO');
                } else {
                    return alertify.error(`PROBLEMAS NO ENVIO DO E-MAIL!`)
                }
            }
        });
    });

    /* VALIDAÇÃO DE FORMULÁRIO */

    $('#form-contato').submit(function(e) {
        e.preventDefault();

        const data = $(this).serializeArray();

        const pattEmail = /^[a-z0-9.|_]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/g;
        const pattName = /\D\w/g;

        const email = $('input[name="email_"]').val();
        const name = $('input[name="nome_"]').val();
        const telefone = $('input[name="telefone_"]').val();

        if (!pattName.test(name))
            return alertify.error('Preencha o corretamente o campo nome.');
        if (!pattEmail.test(email))
            return alertify.error('Preencha o corretamente o campo e-mail.');
        if (telefone.length == 0)
            return alertify.error('Preencha corretamente o campo telefone');


        $('#form-contato :input').attr('disabled', 'disabled');
        $('#btn-contato').text('ENVIANDO...');

        $.post("send-mail.php", data, function(data, status) {
            if (status == "success") {
                $('#form-contato :input').attr('disabled', false);
                $('#btn-contato').text('ENVIAR');
                alertify.success('E-mail enviado com sucesso!');
            }
        });

        return $(this)[0].reset();

    });

    /* FIXA O NAVBAR */
    const navbar = doc.querySelector('#nav');
    win.onscroll = () => {
        if (win.pageYOffset > 100) {
            navbar.style.position = 'fixed';
            navbar.style.top = 0;
            // nav.style.opacity = '0.9';
        } else {
            navbar.style.position = 'relative';
        }
    }

    /* MENU MOBILE */
    const burger = doc.querySelector('.burger');
    const nav = doc.querySelector('.nav-links');
    const navLinks = doc.querySelectorAll('.nav-links li');

    doc.addEventListener("click", function(e) {
        let click = new Event("click");
        let fora = !burger.contains(e.target);

        if (fora && nav.classList.contains('nav-active'))
            burger.dispatchEvent(click);

    });

    const navSlide = () => {

        burger.addEventListener('click', () => {
            //Toggle Nav
            nav.classList.toggle('nav-active');

            //Animate Links
            navLinks.forEach((link, index) => {
                if (link.style.animation) {
                    link.style.animation = '';
                } else {
                    link.style.animation = `navLinkFade 0.1s ease forwards ${index / 7 + 0}s`;
                }
            });
            //Burger Animation
            burger.classList.toggle('toggle');
        });


    }
    navSlide();

    $('.titulo-submenu').click(function(event) {
        event.stopPropagation();
        $(this).find('.sub-menu').toggleClass("click-submenu");
    });

    /* MENU MOBILE - FIM */


    /* SCROLL SUAVE ENTRE LINKS INTERNOS */
    $('.nav-links li a[href^="#"]').click(function(e) {
        e.preventDefault();
        let id = $(this).attr('href');
        let url = window.location.href.split('/');
        url.pop();

        if (typeof $(id).offset() == 'undefined') {
            let urlAtual = url.join('/') + "/" + id;
            return location.replace(urlAtual);
        }

        let targetOffset = $(id).offset().top;
        $('html, body').animate({
            scrollTop: targetOffset - 100
        }, 1000);
    });

    /*Botão que surge no rodapé p/ ir até o topo.*/
    $(window).scroll(function(e) {
        if ($(this).scrollTop() > 0) {
            $('.topo').fadeIn();
        } else {
            $('.topo').fadeOut();
        }
    });

    /*Botão topo do site.*/
    $('.topo').click(function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 500)
    });


    window.sr = ScrollReveal({ reset: true });

    sr.reveal('#footer .container-fluid .row .col-md-3', {
        delay: 400,
        scale: 0
    });
    sr.reveal('#information .container .row .col-md-4', {
        delay: 400,
        scale: 0
    });
    sr.reveal('#links-services .container .row .col-lg-2 a', {
        delay: 400,
        scale: 0
    });
    sr.reveal('.embed-responsive', {
        delay: 400,
        scale: 0
    });
    sr.reveal('#tres-servicos .container .row > div:nth-of-type(n), .slick-parceiros, .slick-depoimentos, .wrap-content-form, #links-services .container .row .col-md-3', {
        delay: 400,
        scale: 0
    });
    sr.reveal('#fale-conosco .row .col-md-6:nth-child(1)', {
        delay: 375,
        duration: 500,
        reset: true
    });

})(document, window);