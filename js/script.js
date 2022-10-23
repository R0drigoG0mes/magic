const menu = document.querySelector('.icon-menu');
const lista = document.querySelector('.lista-menu');
const fechar = document.querySelector('.icon-cross');
const btnNext = document.querySelector('.next');
const btnPrev = document.querySelector('.prev');
const slide_meio = document.querySelector('.meio_s');
const slide_primeiro = document.querySelector('.primeiro_s');
const slide_ultimo = document.querySelector('.ultimo_s');
const texto_slide = document.getElementById('text-meio');
var string_caminho = slide_meio.src.toString();

menu.addEventListener('click',abriu,false);

function abriu(){
    menu.style.display = 'none';
    lista.style.display = 'inline-block';
    lista.style.zindex = '10';
}

fechar.addEventListener('click',fechou)

function fechou(){
    menu.style.display = 'inline';
    lista.style.display = 'none';
}

/* PRÓXIMO E ANTERIOR */

slide_meio.src = `images/1.png`;
slide_primeiro.src = `images/5.png`;
slide_ultimo.src = `images/2.png`;

var valor = 1;

btnNext.addEventListener('click',proximo)
btnPrev.addEventListener('click',anterior)

function proximo() {

    valor++;

    if(valor == 6){
        valor = 1;
    }

    soma = valor - 1;

    if(soma == 0){
        soma = 5;
    }

    soma2 = valor + 1;

    if(soma2 == 6)
    {
        soma2 = 1;
    }

    slide_meio.src = `images/${valor}.png`;
    slide_primeiro.src = `images/${soma}.png`;
    slide_ultimo.src = `images/${soma2}.png`;

    switch (valor) {
        case 1:
          texto_slide.innerHTML = 'Batalhas épicas';
        break;
        case 2:
            texto_slide.innerHTML = 'Personagens incríveis';
        break;
        case 3:
            texto_slide.innerHTML = 'Items raros de suporte';
        break;
        case 4:
            texto_slide.innerHTML = 'Cenários memoráveis';
        break;
        case 5:
            texto_slide.innerHTML = 'Habilidades únicas';
        break;

        }

}

function anterior() {

    valor--;

    if(valor == 0){
        valor = 5;
    }

    soma = valor - 1;

    if(soma == 0)
    {
        soma = 5
    }

    soma2 = valor + 1;

    if(soma2 == 6){
        soma2 = 1;
    }

    slide_meio.src = `images/${valor}.png`;
    slide_primeiro.src = `images/${soma}.png`;
    slide_ultimo.src = `images/${soma2}.png`;

    switch (valor) {
        case 1:
          texto_slide.innerHTML = 'Batalhas épicas';
        break;
        case 2:
            texto_slide.innerHTML = 'Personagens incríveis';
        break;
        case 3:
            texto_slide.innerHTML = 'Items raros de suporte';
        break;
        case 4:
            texto_slide.innerHTML = 'Cenários memoráveis';
        break;
        case 5:
            texto_slide.innerHTML = 'Habilidades únicas';
        break;

        }

}

