const menu = document.querySelector('.icon-menu');
const porta = document.querySelector('.icon-enter');
const lista = document.querySelector('.lista-menu');
const btnNav = document.getElementById('chato');
const btnNav2 = document.getElementById('chato2');
const fechar = document.querySelector('.icon-cross');
const nav = document.querySelector('nav');

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

