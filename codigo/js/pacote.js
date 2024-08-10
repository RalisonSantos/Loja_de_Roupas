const carrossel = document.querySelector(".carrossel");

const arrastar = (e) =>{
    carrossel.scrollLeft = e.pageX;
}

carrossel.addEventListener("movermouse", arrastar);