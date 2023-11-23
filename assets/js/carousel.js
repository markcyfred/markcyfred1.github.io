var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
(function () {
  var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
  s1.async = true;
  s1.src = 'https://embed.tawk.to/652d7fb96fcfe87d54ba5584/1hct0ksqc';
  s1.charset = 'UTF-8';
  s1.setAttribute('crossorigin', '*');
  s0.parentNode.insertBefore(s1, s0);
})();

$('#blogs').owlCarousel({
  loop: true,
  margin: 10,
  dots: false,
  nav: true,
  autoplay: true,
  smartSpeed: 3000,
  autoplayTimeout: 7000,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  },
  navText: [
    "<i style='margin-top:7px;' class='fas fa-chevron-left'></i>",
    "<i style='margin-top:7px;' class='fas fa-chevron-right'></i>"
  ]
});


  // Enhanced Roadmap Carousel
  $("#enhancedRoadmapCarousel").owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    nav: true,
    autoplay: true,
    smartSpeed: 3000,
    autoplayTimeout: 7000,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    },
    navText: [
      "<i class='fas fa-chevron-left'></i>",
      "<i class='fas fa-chevron-right'></i>"
    ]
  });


  $(document).ready(function() {
    $(".testimonial-carousel").owlCarousel({
      autoplay: true,
      smartSpeed: 1000,
      items: 1,
      dots: false,
      loop: true,
      nav: true,
      navText: [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>'
      ]
    });
  });
  

  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 200) {
        $('#backToTop').addClass('active');
      } else {
        $('#backToTop').removeClass('active');
      }
    });
    $('#backToTop').click(function () {
      $('html, body').animate({
        scrollTop: 0
      }, 800);
      return false;
    });
  });

  function loadShapesContent() {
    fetch('shapes.html')
      .then(response => response.text())
      .then(data => {
        const shapesContainer = document.getElementById('shapes-container');
        shapesContainer.innerHTML = data;
      })
      .catch(error => {
        console.error('Error loading shapes content:', error);
      });
  }

  loadShapesContent()

