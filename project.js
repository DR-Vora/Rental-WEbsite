let search = document.querySelector('.search-box');

document.querySelector('#search').onclick = () => {
    search.classList.toggle('active');
    menu.classList.remove('active');
};


// for appearing and dissapearing of menu  icon on  responsive making
let menu = document.querySelector('.navbar');

document.querySelector('#menu').onclick = () => {
    menu.classList.toggle('active');
};


//header
//let header = document.querySelector('header');

//window.addEventListener('scroll',() => {
//    header.classList.toggle('shadow',window.scrollY>0);
//});