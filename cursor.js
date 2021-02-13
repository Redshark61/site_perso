const cursor = document.querySelector(".cursor");
const html = document.querySelector("html");
const body = document.querySelector("body");

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
        cursor.style.top = e.pageY + "px";
        cursor.style.left = e.pageX + "px";
    });

    // body.addEventListener("scroll", function (event) {
    //     cursor.style.top = event.pageY + "px";
    //     cursor.style.left = event.pageX + "px";
    //     console.log(event.clientY);
    // });

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
}
