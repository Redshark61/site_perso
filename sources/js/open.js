const container = document.querySelector("section.competence");
const button = document.querySelector("#open");
const height = container.clientHeight;
container.style.height = "20vh";
const folded_height = container.clientHeight;
var inter;
let fermer = false;

button.addEventListener("click", () => {
    let time = 500;
    let size_per_time = (height / time) * 10;
    if (!fermer) {
        inter = setInterval(() => {
            let current_height = container.clientHeight;
            animate(size_per_time, height, current_height, fermer);
        }, 10);
    } else {
        inter = setInterval(() => {
            let current_height = container.clientHeight;
            animate(-size_per_time, folded_height, current_height, fermer);
        }, 10);
    }
});

function animate(size_per_time, height, current_height, fermer) {
    console.log(fermer);
    console.log(`size per time = ${size_per_time}`);
    current_height += size_per_time;
    container.style.height = current_height + "px";
    console.log(`height = ${height}`);
    console.log(`current height = ${current_height}`);
    if (current_height >= height && !fermer) {
        stopInterval();
        button.textContent = "Refermer";
        console.log("clear");
    } else if (current_height <= height && fermer) {
        stopInterval();
        button.textContent = "Ouvrir";
        console.log("clear");
    }
}

function stopInterval() {
    clearInterval(inter);
    fermer = !fermer;
}
