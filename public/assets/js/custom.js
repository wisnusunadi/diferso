let navigation = document.querySelector('nav.navbar-all');
let menuHamburger = document.querySelector('.menu-hamburger');

window.addEventListener("scroll", function(){
    navigation.classList.toggle("bg-[#222831]", window.scrollY > 0);
    navigation.classList.toggle("mt-5", window.scrollY == 0);
})

let hamburger = document.querySelector('.hamburger');

hamburger.addEventListener("click",function(){
    menuHamburger.classList.toggle("hidden");
})