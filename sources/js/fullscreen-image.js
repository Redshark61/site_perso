const img = document.querySelectorAll("img");
let contenu = document.querySelector(".tuto_contenu");
const overlay = document.getElementById("overlay");
const exit = document.getElementById("exit");
let clicked_img = document.createElement("img");

console.log(document);

for (let index = 0; index < img.length; index++) {
    img[index].addEventListener("click", () => {
        overlay.style.display = "block";
        exit.style.display = "block";
        console.log(clicked_img);
        clicked_img.setAttribute("src", img[index].src);
        clicked_img.classList.add("clicked-img");
        contenu.appendChild(clicked_img);
    });
}

exit.addEventListener("click", () => {
    overlay.style.display = "none";
    exit.style.display = "none";
    clicked_img.remove();
});
