//navbar

window.onscroll = function () {
  var navbar = document.querySelector(".navbar");
  if (window.scrollY > 50) {
    // Cambia este valor según tus necesidades
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
};

// carousel testimonials

document.addEventListener("DOMContentLoaded", function () {
  // Verificar el ancho de la ventana
  if (window.innerWidth >= 768) {
    // 768px punto de corte para pantallas pequeñas
    var myCarousel = document.querySelector("#testimonialCarousel");
    var carousel = new bootstrap.Carousel(myCarousel, {
      wrap: true,
    });

    // Obtener todas las tarjetas
    const cards = Array.from(
      document.querySelectorAll(".carousel-inner .card")
    );

    // Obtener todos los indicadores
    const indicators = Array.from(
      document.querySelectorAll(".carousel-indicators button")
    );

    // Agregar evento de clic a cada tarjeta
    cards.forEach((card, index) => {
      card.addEventListener("click", function () {
        // Remover la clase 'active', 'opacity-50' y 'scale-up' de todas las tarjetas
        cards.forEach((card) => {
          card.classList.remove("active", "opacity-50", "scale-up");
        });

        // Agregar la clase 'active' y 'scale-up' a la tarjeta seleccionada y 'opacity-50' a las demás
        this.classList.add("active", "scale-up");
        cards.forEach((card) => {
          if (card !== this) {
            card.classList.add("opacity-50");
          }
        });

        // Cambiar el indicador activo
        const activeIndicatorIndex = index;
        indicators.forEach((indicator) => indicator.classList.remove("active"));
        indicators[activeIndicatorIndex].classList.add("active");
      });
    });

    // Agregar evento de clic a cada indicador
    indicators.forEach((indicator, index) => {
      indicator.addEventListener("click", function () {
        // Remover la clase 'active', 'opacity-50' y 'scale-up' de todas las tarjetas
        cards.forEach((card) => {
          card.classList.remove("active", "opacity-50", "scale-up");
        });

        // Agregar la clase 'active' y 'scale-up' a la tarjeta correspondiente y 'opacity-50' a las demás
        cards[index].classList.add("active", "scale-up");
        cards.forEach((card) => {
          if (card !== cards[index]) {
            card.classList.add("opacity-50");
          }
        });

        // Cambiar el indicador activo
        indicators.forEach((indicator) => indicator.classList.remove("active"));
        this.classList.add("active");
      });
    });
  }
});
