const hamburger = document.getElementsByClassName("hamburger")[0];
const nav = document.getElementsByClassName("div-nav")[0];
const title = document.querySelector("nav h1");
is_overflow = true;

window.onload = () => {
    if (window.innerWidth <= 700) {
        title.classList.remove("hovered");
    } else {
        title.classList.add("hovered");
    }
};

window.addEventListener("resize", () => {
    if (window.innerWidth <= 700) {
        title.classList.remove("hovered");
    } else {
        title.classList.add("hovered");
    }
});

hamburger.addEventListener("click", () => {
    $(".div-nav").toggleClass("show_nav");
});
