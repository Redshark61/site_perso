let bubble = document.querySelector(".bubble");
let projet = document.querySelector(".projet");

if (screen.width > screen.height) {
    var width = screen.width + 500;
} else {
    var width = screen.height + 500;
}

projet.addEventListener("click", () => {
    console.log("entre");
    bubble.style.display = "block";
    bubble.animate(
        [{ transform: "scale(0)" }, { transform: "scale(" + width + ")" }],

        {
            duration: 1000,
            fill: "forwards",
        }
    );
    setInterval(() => {
        window.location.href = window.location.href + "https://beredy.tk/projet.php";
    }, 1500);
});
