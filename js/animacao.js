

/* ############# ANIMAÇÃO DO BANNER ################## */
$('.banner').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
});

/* ############# ANIMAÇÃO GALERIA FERRAMENTAS ################## */
$('.ferramentas div div').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow: false,
    nextArrow: false,
    responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
});

/* ##################### Animação dos Painel SERVIÇO ################### */

// Pegar todos os botões das TABS
let botoes = document.querySelectorAll(".tabPainel a");
//console.log(botoes)

// Pegar todos os textos das article
let texto = document.querySelectorAll(".painelServico article");



// Para cada botão, criar uma ação de click
for (let i = 0; i < botoes.length; i++) {

    botoes[i].onclick = function () {

        // Remover a class tabAtivo de todos os botões
        for (let j = 0; j < botoes.length; j++) {
            botoes[j].classList.remove("tabAtivo");
        }      

        // // // Adicionar a class tabAtivo só np botão que foi clicado
        botoes[i].classList.add("tabAtivo");
        console.log(botoes[i]);

        // // Esconder todos os textos - Adicionando a class oculto a todos
        for (let k = 0; k < texto.length; k++) {
            texto[k].classList.add("oculto");
        }

        // // Mostrar o texto que do botão que foi clicado
        texto[i].classList.remove("oculto");
    };


}

/* ############# ANIMAÇÃO WOW JS ################## */
new WOW().init();



/* MENU MOBILE */
document.querySelector('.abrir-menu').onclick = function(){
    document.documentElement.classList.add("menu-ativo");
}

document.querySelector('.fechar-menu').onclick = function(){
    document.documentElement.classList.remove("menu-ativo");
}