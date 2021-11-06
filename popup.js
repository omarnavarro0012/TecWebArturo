var btn_abrir = document.getElementById('boton-abrir');
var overlay = document.getElementById('overlay');
var popup = document.getElementById('popup');
var btn_cerrar = document.getElementById('btn-cerrar');
var swipe = document.getElementById('swiper-container');


btn_abrir.addEventListener('click',function(){
    overlay.classList.add('active');
    popup.classList.add('active');
    swipe.classList.add('active');
});

btn_cerrar.addEventListener('click',function(){
    overlay.classList.remove('active');
    popup.classList.remove('active');
    swipe.classList.remove('active');

});
