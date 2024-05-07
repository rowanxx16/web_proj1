// show nabar ul in small devices

let bars = document.querySelector(".fa-bars");
let ul   = document.querySelector(".ul");
const navLink = document.querySelectorAll(".nav-link");

bars.addEventListener("click", function() {
    ul.classList.toggle("show-ul")
    if (ul.classList.contains("hidden")) {
        ul.classList.remove("hidden")
        ul.classList.toggle("show-ul")
    }
})
navLink.forEach(link => {
    link.addEventListener("click", function() {
        ul.classList.add("hidden")
    })
})

// Get the navbar
let navbar = document.getElementById("navbar");

// Get the offset position of the navbar


let sticky = navbar.offsetTop + 200;
function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}

// back to top

let backTop = document.querySelector('.top');

backTop.onclick = function () {
    window.scrollTo({
        top:0,
        behavior: "smooth",
    });
};

window.onscroll = function () {
    myFunction();
    this.scrollY >= 550 ? backTop.classList.add('top-show') : backTop.classList.remove('top-show');
};

// slider

$(document).ready(function(){
    $('.slider').slick({
        dots: true
    });
});