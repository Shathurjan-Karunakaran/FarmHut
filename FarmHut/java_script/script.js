const hero = document.querySelector(".hero");
const title = document.querySelector("#title");
const nav_links = document.querySelector(".nav-links");
const hero_text = document.querySelector(".hero_text");

const tl = new TimelineMax();

tl.fromTo(hero, 1, {height: "0%"}, {height: "100%", ease: Power2.easeInOut })
.fromTo(hero, 1.2, {width: "100%"}, {width: "95%" , ease: Power2.easeInOut })
;