const hamburger = document.getElementsByClassName("hamburger")[0];
const nav = document.getElementsByClassName("div-nav")[0];
console.log(hamburger);
is_overflow = true;

hamburger.addEventListener("click", () => {
	nav.toggleClass("show_nav");
	if (is_overflow) {
		body.style.overflowY = "hidden";
		html.style.overflowY = "hidden";
		is_overflow = false;
	} else {
		body.style.overflowY = "auto";
		html.style.overflowY = "auto";
	}
});
