const slide = document.querySelector(".slide"),
proximaimg = document.querySelectorAll("img")[0],
mudandoimg = document.querySelectorAll(".pacote i");

let isDragStart = false , prevPageX, prevScrollLeft;
let modfbtn = proximaimg.clientWidth + 300;
let scrollWidth = slide.scrollWidth - slide.clientWidth;

const mostrabtnsq = () => {
    mudandoimg[0].style.display = slide.scrollLeft == 0 ? "none" : "block";
    mudandoimg[1].style.display = slide.scrollLeft == scrollWidth ? "none" : "block";
}

mudandoimg.forEach(icon => {
    icon.addEventListener("click", () => {
        slide.scrollLeft += icon.id == "left" ? -modfbtn : modfbtn;
        mostrabtnsq();
    });
});

