const hamburger = document.getElementsByClassName('hamburger')[0]
const nav = document.getElementsByClassName('div-nav')[0]
const main = document.getElementsByTagName('main')
const title = document.querySelector('nav h1')
var is_blured = false

window.onload = () => {
    if (window.innerWidth <= 700) {
        title.classList.remove('hovered')
    } else {
        title.classList.add('hovered')
    }

}

window.addEventListener('resize', () => {
    if (window.innerWidth <= 700) {
        title.classList.remove('hovered')
    } else {
        title.classList.add('hovered')
    }
})

hamburger.addEventListener('click', () => {
    nav.classList.toggle("unhide")
})