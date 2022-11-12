const menu = document.querySelector('.icon-menu');
const lista = document.querySelector('.lista-menu');
const fechar = document.querySelector('.icon-cross');
const btnNext = document.querySelector('.next');
const btnPrev = document.querySelector('.prev');
const slide_meio = document.querySelector('.meio_s');
const slide_primeiro = document.querySelector('.primeiro_s');
const slide_ultimo = document.querySelector('.ultimo_s');
const texto_slide = document.getElementById('text-meio');
const radio1 = document.getElementById('radio-1');
const radio2 = document.getElementById('radio-2');
const radio3 = document.getElementById('radio-3');
const radio4 = document.getElementById('radio-4');
const radio5 = document.getElementById('radio-5');
const btnLogin = document.getElementById('chato');
const email = document.getElementById('email-texto');
const menu_desktopi = document.getElementById("desktopi");


slide_meio.style.opacity = '60%';
radio1.style = 'background-color: #0077a6; outline: 1px solid #00f4fd;';

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
          texto_slide.innerHTML = 'Batalhas frenéticas';
          radio1.style = 'background-color: #0077a6; outline: 1px solid #00f4fd;';
          radio2.style = 'background-color: #ccc; outline: none;';
          radio3.style = 'background-color: #ccc; outline: none;';
          radio4.style = 'background-color: #ccc; outline: none;';
          radio5.style = 'background-color: #ccc; outline: none;';
        break;
        case 2:
            texto_slide.innerHTML = 'Personagens incríveis';
            radio1.style = 'background-color: #ccc; outline: none;';
            radio2.style = 'background-color: #0077a6; outline: 1px solid #00f4fd;';
            radio3.style = 'background-color: #ccc; outline: none;';
            radio4.style = 'background-color: #ccc; outline: none;';
            radio5.style = 'background-color: #ccc; outline: none;';
        break;
        case 3:
            texto_slide.innerHTML = 'Items raros de suporte';
            radio1.style = 'background-color: #ccc; outline: none;';
            radio2.style = 'background-color: #ccc; outline: none;';
            radio3.style = 'background-color: #0077a6; outline: 1px solid #00f4fd;';
            radio4.style = 'background-color: #ccc; outline: none;';
            radio5.style = 'background-color: #ccc; outline: none;';
        break;
        case 4:
            texto_slide.innerHTML = 'Cenários memoráveis';
            radio1.style = 'background-color: #ccc; outline: none;';
            radio2.style = 'background-color: #ccc; outline: none;';
            radio3.style = 'background-color: #ccc; outline: none;';
            radio4.style = 'background-color: #0077a6; outline: 1px solid #00f4fd;';
            radio5.style = 'background-color: #ccc; outline: none;';
        break;
        case 5:
            texto_slide.innerHTML = 'Habilidades únicas';
            radio1.style = 'background-color: #ccc; outline: none;';
            radio2.style = 'background-color: #ccc; outline: none;';
            radio3.style = 'background-color: #ccc; outline: none;';
            radio4.style = 'background-color: #ccc; outline: none;';
            radio5.style = 'background-color: #0077a6; outline: 1px solid #00f4fd;';
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
          texto_slide.innerHTML = 'Batalhas frenéticas';
          radio1.style = 'background-color: #0077a6; outline: 1px solid #00f4fd;';
          radio2.style = 'background-color: #ccc; outline: none;';
          radio3.style = 'background-color: #ccc; outline: none;';
          radio4.style = 'background-color: #ccc; outline: none;';
          radio5.style = 'background-color: #ccc; outline: none;';
        break;
        case 2:
            texto_slide.innerHTML = 'Personagens incríveis';
            radio1.style = 'background-color: #ccc; outline: none;';
            radio2.style = 'background-color: #0077a6; outline: 1px solid #00f4fd;';
            radio3.style = 'background-color: #ccc; outline: none;';
            radio4.style = 'background-color: #ccc; outline: none;';
            radio5.style = 'background-color: #ccc; outline: none;';
        break;
        case 3:
            texto_slide.innerHTML = 'Items raros de suporte';
            radio1.style = 'background-color: #ccc; outline: none;';
            radio2.style = 'background-color: #ccc; outline: none;';
            radio3.style = 'background-color: #0077a6; outline: 1px solid #00f4fd;';
            radio4.style = 'background-color: #ccc; outline: none;';
            radio5.style = 'background-color: #ccc; outline: none;';
        break;
        case 4:
            texto_slide.innerHTML = 'Cenários memoráveis';
            radio1.style = 'background-color: #ccc; outline: none;';
            radio2.style = 'background-color: #ccc; outline: none;';
            radio3.style = 'background-color: #ccc; outline: none;';
            radio4.style = 'background-color: #0077a6; outline: 1px solid #00f4fd;';
            radio5.style = 'background-color: #ccc; outline: none;';
        break;
        case 5:
            texto_slide.innerHTML = 'Habilidades únicas';
            radio1.style = 'background-color: #ccc; outline: none;';
            radio2.style = 'background-color: #ccc; outline: none;';
            radio3.style = 'background-color: #ccc; outline: none;';
            radio4.style = 'background-color: #ccc; outline: none;';
            radio5.style = 'background-color: #0077a6; outline: 1px solid #00f4fd;';
        break;

        }

}

// REQUISIÇÕES PARA O PHP

if(logado == 1){
    if(window.screen.width >= 200 && window.screen.width < 751){
        btnLogin.innerHTML ='Sair<span class="icon-exit"></span>';
        menu.style.display = 'inline';
        menu_desktopi.style.display = 'none';
    }
    if(window.screen.width >= 751){
        btnLogin.innerHTML ='<span class="icon-exit"></span>';
        btnLogin.style.left = 'calc(100vw - 50px)';
        menu.style.display = 'none';
        menu_desktopi.style.display = 'inline-block';
    }
    btnLogin.href = 'sair.php';
}
else{
    menu.style.display = 'none';
    menu_desktopi.style.display = 'none';
}

