const lista = document.querySelectorAll('.lista');
function atvlista(){
    lista.forEach((item) =>
    item.classList.remove('ativado'));
    this.classList.add('ativado');
}
    lista.forEach((item) =>
    item.addEventListener('click', atvlista));