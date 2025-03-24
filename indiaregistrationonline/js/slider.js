// let slider = document.querySelector('.slider .list');
// let items = document.querySelectorAll('.slider .list .item');
// let dots = document.querySelectorAll('.slider .dots li');

// let lengthItems = items.length - 1;
// let active = 0;

// let refreshInterval = setInterval(() => {
//     active = active + 1 <= lengthItems ? active + 1 : 0;
//     reloadSlider();
// }, 3000);

// function reloadSlider() {
//     slider.style.left = -items[active].offsetLeft + 'px';
//     items.forEach(item => item.style.width = '100vw'); // Set width to full screen

//     let last_active_dot = document.querySelector('.slider .dots li.active');
//     last_active_dot.classList.remove('active');
//     dots[active].classList.add('active');
// }

// dots.forEach((li, key) => {
//     li.addEventListener('click', () => {
//         active = key;
//         reloadSlider();
//     })
// })

// window.onresize = function (event) {
//     reloadSlider();
// };

/*-------------------- counter start --------------------------------*/
document.addEventListener("DOMContentLoaded", () => {
  // Animation function to animate a counter element
  function animateCounter(obj, initVal, lastVal, duration) {
    let startTime = null;

    const step = (currentTime) => {
      if (!startTime) {
        startTime = currentTime;
      }

      const elapsedTime = currentTime - startTime;
      const progress = Math.min(elapsedTime / duration, 1);
      const animatedValue = Math.floor(
        progress * (lastVal - initVal) + initVal
      );

      obj.innerHTML = animatedValue;

      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };

    // Initiate the animation loop
    window.requestAnimationFrame(step);
  }

  // Selecting elements and animating counters on DOM load
  const counters = [
    { id: "0101", initialValue: 0, finalValue: 10, duration: 12000 }, // Years of experience
    { id: "0102", initialValue: 0, finalValue: 47, duration: 12000 }, // Website Launched
    { id: "0103", initialValue: 0, finalValue: 20, duration: 12000 }, // Team Strength
    { id: "0104", initialValue: 0, finalValue: 1200, duration: 12000 }, // Assignments
    { id: "0105", initialValue: 0, finalValue: 2100, duration: 12000 },
    { id: "0106", initialValue: 0, finalValue: 5000, duration: 12000 }, // Graphic Design
  ];

  // Loop through each counter element and animate
  counters.forEach((counter) => {
    const { id, initialValue, finalValue, duration } = counter;
    const counterElement = document.getElementById(id);

    if (counterElement) {
      animateCounter(counterElement, initialValue, finalValue, duration);
    }
  });
});

/*-------------------- counter end --------------------------------*/

/******************************** FOR  ABOVE TEXT *********************/

const texts = [
  "Company Registration",
  "Trademark Registration ",
  "Digital Signature",
  "FSSAI Registration",
];
let currentTextIndex = 0;
let currentCharIndex = 0;
let isDeleting = false;
const dynamicText = document.getElementById("dynamicText");

function typeEffect() {
  const currentText = texts[currentTextIndex];
  if (isDeleting) {
    currentCharIndex--;
  } else {
    currentCharIndex++;
  }

  dynamicText.textContent = currentText.substring(0, currentCharIndex);

  if (!isDeleting && currentCharIndex === currentText.length) {
    setTimeout(() => (isDeleting = true), 1000);
  } else if (isDeleting && currentCharIndex === 0) {
    isDeleting = false;
    currentTextIndex = (currentTextIndex + 1) % texts.length;
  }

  setTimeout(typeEffect, isDeleting ? 100 : 200);
}

document.addEventListener("DOMContentLoaded", () => {
  typeEffect();
});