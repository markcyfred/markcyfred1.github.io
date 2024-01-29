const dynamicText = document.getElementById("dynamic-text");
const image = document.getElementById("image");

const textVariations = ["Awesome IT Services", "For Your Business"];
let textIndex = 0;
let charIndex = 0;
let isDeleting = false;

function typeText() {
    const currentText = textVariations[textIndex];
    if (isDeleting) {
        dynamicText.textContent = currentText.substring(0, charIndex - 1) + "|"; // Adding stick icon
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

// Start the typing animation
setTimeout(typeText, 100); // Delay the typing animation for 1 second
