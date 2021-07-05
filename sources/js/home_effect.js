const button = document.querySelector(".projet");
const p = document.querySelector(".projet p");
const arrow = document.querySelector(".arrow-right");
//const main = document.querySelector("main");

button.addEventListener("mouseenter", () => {
    button.style.transform = "translateZ(50px)";
    p.style.transform = "translateZ(20px)";
    arrow.style.transform = "translateZ(50px)";
});

button.addEventListener("mouseleave", () => {
    button.style.transform = "translateZ(0px)";
    p.style.transform = "translateZ(0px)";
    arrow.style.transform = "translateZ(0px)";
});
