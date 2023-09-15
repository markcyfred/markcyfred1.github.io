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


// JavaScript to handle the active link
const currentLocation = window.location.href;

const navLinks = document.querySelectorAll('.header .navbar ul li a');

navLinks.forEach(link => {
if (link.href === currentLocation) {
  link.classList.add('active');
}
});
function toggleMobileMenu() {
  const mobileMenu = document.querySelector('.mobile-menu');
  mobileMenu.classList.toggle('active');
}
