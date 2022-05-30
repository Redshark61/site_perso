const x = document.getElementById("x");
const y = document.getElementById("y");

const setSize = () => {
	x.innerHTML = window.innerWidth;
	y.innerHTML = window.innerHeight;
};
window.addEventListener("resize", function () {
	setSize();
});

setSize();
