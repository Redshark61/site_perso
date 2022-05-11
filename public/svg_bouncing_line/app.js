const path = document.querySelector("path");

var coords = {
    x: 0,
    y: 0,
};
var width = 0;

document.addEventListener("mouseout", () => {
    gsap.to(path, { ease: Elastic.easeOut.config(1, 0.2), attr: { d: "M250,0 Q250,250 250,500" } });
});

document.addEventListener("mousemove", (e) => {
    coords.x = e.clientX;
    coords.y = e.clientY;

    width = coords.x / window.innerWidth;
    updateCoords(coords);
});

function updateCoords(coords) {
    coords.x = width * 500;
    path.setAttribute("d", `M250,0 Q${coords.x},${coords.y} 250,500`);
}
