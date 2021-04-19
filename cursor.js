const cursor = document.querySelector(".cursor");
const html = document.querySelector("html");
const body = document.querySelector("body");
const main = document.querySelector("main");

var isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
        return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
    },
    any: function () {
        return (
            isMobile.Android() ||
            isMobile.BlackBerry() ||
            isMobile.iOS() ||
            isMobile.Opera() ||
            isMobile.Windows()
        );
    },
};

if (isMobile.any()) {
    cursor.style.display = "none";
    html.style.cursor = "default";
} else {
    window.addEventListener("mousemove", function (e) {
        cursor.style.top = e.clientY + "px";
        cursor.style.left = e.clientX + "px";
    });

    window.addEventListener("mousedown", function () {
        cursor.classList.add("down");
        if (cursor.classList.contains("up")) {
            cursor.classList.remove("up");
        }
    });
    window.addEventListener("mouseup", function () {
        cursor.classList.remove("down");
        cursor.classList.add("up");
    });

    if (main !== null) {
        main.addEventListener("mouseenter", () => {
            cursor.classList.add("white-cursor");
        });
        main.addEventListener("mouseleave", () => {
            cursor.classList.remove("white-cursor");
        });
    }
}
