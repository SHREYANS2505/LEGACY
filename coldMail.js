let currentSlide = 0;

function changeSlide(index) {
  const slider = document.querySelector(".slider");
  const buttons = document.querySelectorAll(".slider-button");

  // Update the transform property to show the selected slide
  slider.style.transform = `translateX(-${index * 100}%)`;

  // Update active button state
  buttons.forEach((button, i) => {
    button.classList.toggle("active", i === index);
  });

  // Update the current slide
  currentSlide = index;
}

// Auto-slide function (optional)
function autoSlide() {
  currentSlide = (currentSlide + 1) % 3; // Loop back to the first slide
  changeSlide(currentSlide);
}

// Auto-slide interval (optional)
setInterval(autoSlide, 3000); // Change slide every 3 seconds
