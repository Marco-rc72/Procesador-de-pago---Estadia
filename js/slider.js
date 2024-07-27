const slider = document.querySelector("#slider");
let sliderTabla = document.querySelectorAll(".tabla");
let sliderTablaLast = sliderTabla[sliderTabla.length - 1];

const botonIzq = document.querySelector("#btn-izquierda");
const botonDer = document.querySelector("#btn-derecha");

slider.insertAdjacentElement('afterbegin', sliderTablaLast);

function Siguiente() {
    let sliderTablaPrim = document.querySelectorAll(".tabla")[0];
    slider.style.transform = "translateX(-740px)";
    slider.style.transition = "all 0.25s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('beforeend', sliderTablaPrim);
        slider.style.transform = "translateX(-370px)";
    }, 250)
}

function Anterior() {
    let sliderTabla = document.querySelectorAll(".tabla");
    let sliderTablaLast = sliderTabla[sliderTabla.length - 1];
    slider.style.transform = "translateX(0)";
    slider.style.transition = "all 0.25s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('afterbegin', sliderTablaLast);
        slider.style.transform = "translateX(-370px)";
    }, 250)
}


botonDer.addEventListener('click', function(){
    Siguiente();
});
botonIzq.addEventListener('click', function(){
    Anterior();
});