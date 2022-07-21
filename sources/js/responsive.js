const hamburger = document.getElementsByClassName("hamburger")[0];
const nav = document.getElementsByClassName("div-nav")[0];
const html = document.getElementsByTagName("html")[0];
const body = document.getElementsByTagName("body")[0];
is_overflow = true;

hamburger.addEventListener("click", () => {
	nav.classList.toggle("show");
	hamburger.classList.toggle("cross");
	if (is_overflow) {
		body.style.overflowY = "hidden";
		html.style.overflowY = "hidden";
		is_overflow = !is_overflow;
	} else {
		body.style.overflowY = "auto";
		html.style.overflowY = "auto";
		is_overflow = !is_overflow;
	}
});
