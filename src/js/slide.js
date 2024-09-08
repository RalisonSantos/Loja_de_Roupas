const btnNext = document.getElementById('nextSlide')
const btnPrevious = document.getElementById('previousSlide')
const slider = document.querySelector('.slide')
const conteudo = document.querySelector('.conteudo')


const {width: slideWidth} = window.getComputedStyle(slider)
const {width: conteudoWidth} = window.getComputedStyle(conteudo)


const slideProps = {
    width: parseInt(slideWidth),
    scroll: 0,
}

function controlSlide({ target: { id } }){
    switch (id) {
        case 'nextSlide': {
            if(slideProps.scroll + slideProps.width < parseInt(conteudoWidth)) {
              slideProps.scroll += slideProps.width;
            }
            return slider.scrollLeft = slideProps.scroll;
        }

        case 'previousSlide':
            slideProps.scroll = slideProps.scroll - slideProps.width < 0 ? 0 :slideProps.scroll - slideProps.width;
            return slider.scrollLeft = slideProps.scroll;
        
        default:
            break;
    }
}

btnNext.addEventListener('click', controlSlide)
btnPrevious.addEventListener('click', controlSlide)