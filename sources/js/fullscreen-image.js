const img = document.querySelectorAll("img");
let contenu = document.querySelector(".tuto_contenu");
const overlay = document.getElementById("overlay");
const exit = document.getElementById("exit");
let clicked_img = document.createElement("img");

console.log(document);

for (let index = 0; index < img.length; index++) {
    img[index].addEventListener("click", () => {
        html.style.overflowY = "hidden";
        overlay.style.display = "block";
        overlay.style.backgroundImage = `url(${img[index].src})`;
        exit.style.display = "block";
    });
}

exit.addEventListener("click", () => {
    html.style.overflowY = "scroll";

    overlay.style.display = "none";
    overlay.style.backgroundImage = `none`;
    exit.style.display = "none";
});
