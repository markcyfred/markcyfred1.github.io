const dynamicText = document.getElementById("dynamic-text");
const image = document.getElementById("image");
const images = ["assets/img/hero-img.png", "assets/img/details-2.png"]; // Add the paths to your images

const textVariations = ["Elevating Brands",  "Growing Businesses"];
let textIndex = 0;
let charIndex = 0;
let isDeleting = false;

function typeText() {
    const currentText = textVariations[textIndex];
    if (isDeleting) {
        dynamicText.textContent = currentText.substring(0, charIndex - 1);
        charIndex--;
    } else {
        dynamicText.textContent = currentText.substring(0, charIndex + 1);
        charIndex++;
    }

    if (!isDeleting && charIndex === currentText.length) {
        isDeleting = true;
        setTimeout(typeText, 1000); // Pause at end of typing
    } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        textIndex = (textIndex + 1) % textVariations.length;
        setTimeout(typeText, 500); // Pause before typing next variation
    } else {
        setTimeout(typeText, isDeleting ? 100 : 150);
    }
}

// Change the image every 5 seconds (5000 milliseconds)
setInterval(changeImage, 6000);
let currentIndex = 0;

function changeImage() {
    currentIndex = (currentIndex + 1) % images.length;
    image.src = images[currentIndex];
}

// Start the typing animation
setTimeout(typeText, 100); // Delay the typing animation for 1 second
