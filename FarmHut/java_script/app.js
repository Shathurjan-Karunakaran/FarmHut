const threebar = document.querySelector(".threebar");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

threebar.addEventListener("click", () => {
	navLinks.classList.toggle("open");
	links.forEach(link =>{
		link.classList.toggle("fade");
	});
});