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

  loadShapesContent();

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
