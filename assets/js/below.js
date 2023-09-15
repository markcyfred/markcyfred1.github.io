function toggleMobileMenu() {
  const mobileMenu = document.querySelector('.mobile-menu');
  mobileMenu.classList.toggle('active');
  }

  function closeMobileMenu() {
  const mobileMenu = document.querySelector('.mobile-menu');
  mobileMenu.classList.remove('active');
  }
  function isDesktopView() {
  return window.innerWidth >= 992; 
  }
  window.addEventListener('resize', function () {
  if (isDesktopView()) {
  closeMobileMenu();
  }
  });
  document.addEventListener('click', function (event) {
  const mobileMenu = document.querySelector('.mobile-menu');
  const mobileNavToggle = document.getElementById('mobile-menu-toggle');

  if (!mobileMenu.contains(event.target) && !mobileNavToggle.contains(event.target)) {
  closeMobileMenu();
  }
  });
  const mobileNavLinks = document.querySelectorAll('.mobile-menu a');
  mobileNavLinks.forEach(link => {
  link.addEventListener('click', closeMobileMenu);
  });


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
