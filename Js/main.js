window.onscroll = function() {
    var navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) { // Cambia este valor según tus necesidades
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
};
