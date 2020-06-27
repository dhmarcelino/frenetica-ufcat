// JQuery
$(document).ready(function(){
    // Botão do menu 
    $('.menu-principal__btn').click(function(){
        $('.menu-principal').toggleClass('menu-principal--fechado');
    });

    // Slide de depoimentos 
    $('.depoimentos__caixa').slick({
        autoplay: true,
        arrows: false,
        dots: true
    });

    // Validação formulário
    $('.formulario').validate({
        rules: {
            nome: 'required',
            email: {
                required: true,
                email: true
            },
            mensagem: 'required'
        },
        messages:{
            nome: "Digite seu nome.",
            email: {
                required: 'O campo e-mail é obrigatório.',
                email: 'Este endereço de e-mail não é válido.'
            },
            mensagem: "Digite sua mensagem."
        }
    });
});

//let botao = document.querySelector('.menu-principal__btn');
//let menuPrincipal = document.querySelector('.menu-principal');
var resultados = document.getElementsByClassName('cabecalho-home__titulo');

/*botao.addEventListener("click", abreFechaMenu);
function abreFechaMenu(evento){
    menuPrincipal.classList.toggle('menu-principal--fechado');
}
*/

resultados[0].addEventListener('click', funcaoResposta);

var contador = true;
function funcaoResposta(evento){
    if(contador == true){
        evento.toElement.innerHTML = "ia ia ia, pau no cú da Engenharia!";
        contador = false;
    }
    else{
        evento.toElement.innerHTML = "Nada mudou, a Frenética é o terror!";
        contador = true;
    }
}
