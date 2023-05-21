const navMenu = document.getElementById("nav-menu");
const navToggle = document.getElementById("nav-toggle");
const navClose = document.getElementById("nav-close");
const navLink = document.querySelectorAll(".nav__link");
/*~~~~~~~~~~~~~~~ TOGGLE MENU ~~~~~~~~~~~~~~~*/
/* MENU SHOW */
if (navToggle) {
  navToggle.addEventListener("click", () => {
    navMenu.classList.add("show-menu");
  });
}
/* MENU HIDDEN */
if (navClose) {
  navClose.addEventListener("click", () => {
    navMenu.classList.remove("show-menu");
  });
}
/* REMOVE MENU MOBILE */
navLink.forEach((link) =>
  link.addEventListener("click", () => {
    navMenu.classList.remove("show-menu");
  })
);
/*~~~~~~~~~~~~~~~ CHANGE BACKGROUND headerm ~~~~~~~~~~~~~~~*/
const scrollheaderm = () => {
    const headerm = document.getElementById("headerm");
  
    this.scrollY >= 50
      ? headerm.classList.add("bg-headerm")
      : headerm.classList.remove("bg-headerm");
  };
  
  window.addEventListener("scroll", scrollheaderm);
/*~~~~~~~~~~~~~~~ SCROLL SECTIONS ACTIVE LINK ~~~~~~~~~~~~~~~*/
const activeLink = () => {
    const section = document.querySelectorAll('section');
    const navLink = document.querySelectorAll(".nav__link");
    let current = "memleket";
    section.forEach(section => {
        const sectionTop = section.offsetTop;
        if(this.scrollY >= sectionTop -60) {
            current = section.getAttribute('id');
        }
    })
    navLink.forEach(item => {
        item.classList.remove('active-link');
        if(item.href.includes(current)) {
            item.classList.add("active-link")
        }
    })
}
window.addEventListener("scroll", activeLink);
/*~~~~~~~~~~~~~~~ SHOW SCROLL UP ~~~~~~~~~~~~~~~*/
const scrollUp = () => {
  const scrollUp = document.getElementById("scroll-up");
  this.scrollY >= 350
    ? scrollUp.classList.add("show-scroll")
    : scrollUp.classList.remove("show-scroll");
};
window.addEventListener("scroll", scrollUp);
/*~~~~~~~~~~~~~~~ DARK LIGHT THEME ~~~~~~~~~~~~~~~*/
const themebutton = document.getElementById('theme-button');
if(localStorage.getItem('mode') == 'dark') {
    darkmode();
} else {
    lightmode();
}
themebutton.addEventListener('click', (e) => {
    if(localStorage.getItem('mode') == 'light') {
        darkmode();
    } else {
        lightmode();
    }
    
})
function darkmode () {
    document.body.classList.add('dark-theme');
    themebutton.classList.replace('fa-moon', 'fa-sun');
    localStorage.setItem('mode', 'dark');
}
function lightmode () {
    document.body.classList.remove('dark-theme');
    themebutton.classList.replace('fa-sun', 'fa-moon');
    localStorage.setItem('mode', 'light');
}
/*~~~~~~~~~~~~~~~ SCROLL REVEAL ANIMATION ~~~~~~~~~~~~~~~*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
});
sr.reveal('.memleket__img');
sr.reveal(".memleket__data", { origin : "bottom"});
sr.reveal(".mirasimiz__data", { origin : "left"});
sr.reveal(".mirasimiz__img", { origin : "right"});
sr.reveal(".more__card", {interval: 100});
sr.reveal(".fazla__data", { origin : "left"});
sr.reveal(".fazla__img", { origin : "right"});
sr.reveal('.kale');
sr.reveal('.footer')