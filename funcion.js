const pantalla = document.querySelector(".pantalla");
const botones =  document.querySelectorall(".btn");

 botones.forEach(boton => {
    boton.addEventListener("click",  () => {
        const botonApretado = boton.texContent;
        pantalla.textContent += botonApretado;
    })
 })