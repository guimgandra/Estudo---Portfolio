/* let botao = document.querySelector ('.menu-principal__btn');
let menuPrincipal = document.querySelector ('.menu-principal');

botao.addEventListener ("click", abrirMenu);

function abrirMenu (evento) {
    menuPrincipal.classList.toggle("menu-principal--fechado");
    console.log ("Clicou no botão");
} */

$ (document).ready(function(){
    // Botão menu 
    $ ('.menu-principal__btn').click(function(){
        $('.menu-principal').toggleClass('menu-principal--fechado');    
    });

    // Slide depoimentos
    $ ('.depoimentos__caixa').slick({
        autoplay: true,
        arrows: false,
        dots: true
    });

    // Validação do formulario de contato
    $ ('.formulario').validate({
        rules: {
            nome: 'required',
            email: {
                required: true,
                email: true
            },
            mensagem: 'required',
        },
        messages: {
            nome: {
                required: 'Nome obrigatório.'
            },
            email: {
                required: 'Por favor, preencha o email.',
                email: 'Por favor, preencha um email válido.'
            },
            mensagem: {
                required: 'Mensagem obrigatória.'
            }
        }
    });
});

