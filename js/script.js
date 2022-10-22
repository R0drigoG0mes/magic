const menu = document.querySelector('.icon-menu');
const porta = document.querySelector('.icon-enter');
const lista = document.querySelector('.lista-menu');
const btnNav = document.getElementById('chato');
const btnNav2 = document.getElementById('chato2');
const fechar = document.querySelector('.icon-cross');
const nav = document.querySelector('nav');
const btnNext = document.querySelector('.next');
const btnPrev = document.querySelector('.prev');
const slide_meio = document.querySelector('.meio_s');
const slide_primeiro = document.querySelector('.primeiro_s');
const slide_ultimo = document.querySelector('.ultimo_s');
var contia1 = 3;
var contia2 = 2;
var contia3 = 4;

menu.addEventListener('click',abriu,false);

function abriu(){
    menu.style.display = 'none';
    lista.style.display = 'inline-block';
}

fechar.addEventListener('click',fechou)

function fechou(){
    menu.style.display = 'inline';
    lista.style.display = 'none';
}

btnNext.addEventListener('click',proximo)
btnPrev.addEventListener('click',anterior)

function proximo() {
    slide_meio.src = `images/${contia1}.png`;
    slide_primeiro.src = `images/${contia2}.png`;
    slide_ultimo.src = `images/${contia3}.png`;
    contia1++;
    contia2++;
    contia3++;
    if(contia1 == 6){
        contia1 = 1;

    }

    if(contia2 == 6){
        contia2 = 1;
    }

    if(contia3 == 6){
        contia3 = 1;
    }

    
}

function anterior() {
    slide_meio.src = `images/${contia1}.png`;
    slide_primeiro.src = `images/${contia2}.png`;
    slide_ultimo.src = `images/${contia3}.png`;
    contia1--;
    contia2--;
    contia3--;
    if(contia1 == 0){
        contia1 = 5;

    }

    if(contia2 == 0){
        contia2 = 5;
    }

    if(contia3 == 0){
        contia3 = 5;
    }

    
}
