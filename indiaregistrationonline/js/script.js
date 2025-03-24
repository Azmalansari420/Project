/*---------------------------------
header
---------------------------------*/

const menu = document.querySelector(".menu");
const menuMain = menu.querySelector(".menu-main");
const goBack = menu.querySelector(".go-back");
const menuTrigger = document.querySelector(".mobile-menu-trigger");
const closeMenu = menu.querySelector(".mobile-menu-close");
let subMenu;
menuMain.addEventListener("click", (e) => {
  if (!menu.classList.contains("active")) {
    return;
  }
  if (e.target.closest(".menu-item-has-children")) {
    const hasChildren = e.target.closest(".menu-item-has-children");
    showSubMenu(hasChildren);
  }
});
goBack.addEventListener("click", () => {
  hideSubMenu();
});
menuTrigger.addEventListener("click", () => {
  toggleMenu();
});
closeMenu.addEventListener("click", () => {
  toggleMenu();
});
document.querySelector(".menu-overlay").addEventListener("click", () => {
  toggleMenu();
});
function toggleMenu() {
  menu.classList.toggle("active");
  document.querySelector(".menu-overlay").classList.toggle("active");
}
function showSubMenu(hasChildren) {
  subMenu = hasChildren.querySelector(".sub-menu");
  subMenu.classList.add("active");
  subMenu.style.animation = "slideLeft 0.5s ease forwards";
  const menuTitle =
    hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
  menu.querySelector(".current-menu-title").innerHTML = menuTitle;
  menu.querySelector(".mobile-menu-head").classList.add("active");
}

function hideSubMenu() {
  subMenu.style.animation = "slideRight 0.5s ease forwards";
  setTimeout(() => {
    subMenu.classList.remove("active");
  }, 300);
  menu.querySelector(".current-menu-title").innerHTML = "";
  menu.querySelector(".mobile-menu-head").classList.remove("active");
}

window.onresize = function () {
  if (this.innerWidth > 991) {
    if (menu.classList.contains("active")) {
      toggleMenu();
    }
  }
};

/*----------------------------------------------------
topbar
----------------------------------------------------*/
  var prevScrollpos = window.pageYOffset;
  var topbar = document.querySelector(".topbar");
  var header = document.querySelector(".header");

  // Function to get current margin top based on screen size
  function getHeaderMarginTop() {
    if (window.innerWidth <= 375) {
      return "25px"; // Adjust margin when topbar is visible on very small screens
    } else if (window.innerWidth <= 425) {
      return "25px"; // Adjust margin when topbar is visible on small screens
    } else if (window.innerWidth <= 483) {
      return "25px"; // Adjust margin when topbar is visible on small-medium screens
    } else if (window.innerWidth <= 768) {
      return "25px"; // Adjust margin when topbar is visible on medium screens
    } else if (window.innerWidth <= 991) {
      return "104px"; // Adjust margin when topbar is visible on larger medium screens
    } else if (window.innerWidth <= 1100) {
      return "100px"; // Adjust margin when topbar is visible on medium-large screens
    } else if (window.innerWidth <= 1200) {
      return "108px"; // Adjust margin when topbar is visible on large screens
    } else if (window.innerWidth <= 1300) {
      return "118px"; // Adjust margin when topbar is visible on larger screens
    } else if (window.innerWidth <= 1400) {
      return "124px"; // Adjust margin when topbar is visible on extra-large screens
    } else {
      return "130px"; // Adjust margin when topbar is visible on very large screens
    }
  }

  // Initially set the topbar to be visible
  topbar.classList.add("visible");
  header.style.marginTop = getHeaderMarginTop(); // Adjust margin when topbar is visible

  window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;

    if (currentScrollPos === 0) {
      // If the current scroll position is at the top of the page, ensure the topbar is visible
      topbar.classList.add("visible");
      header.style.marginTop = getHeaderMarginTop(); // Adjust margin when topbar is visible
    } else {
      // For other scroll positions, adjust visibility and margin as before
      if (prevScrollpos > currentScrollPos) {
        topbar.classList.remove("hidden");
        topbar.classList.add("visible");
        header.style.marginTop = getHeaderMarginTop(); // Adjust margin when topbar is visible
      } else {
        topbar.classList.remove("visible");
        topbar.classList.add("hidden");
        header.style.marginTop = "0"; // Reset margin when topbar is hidden
      }
    }
    prevScrollpos = currentScrollPos;
  };

  // Adjust margin on window resize
  window.onresize = function () {
    if (topbar.classList.contains("visible")) {
      header.style.marginTop = getHeaderMarginTop();
    }
  };

/* ---------------Crausel Start------------------------------------- */
const carousel = document.querySelector(".carousel");
const cards = document.querySelectorAll(".card");
let currentIndex = 0;
const delay = 2000; // Delay in milliseconds

// Clone the cards and append them to the carousel
cards.forEach((card) => {
  const clone = card.cloneNode(true);
  carousel.appendChild(clone);
});

// function moveCarousel() {
//   const cardWidth = cards[0].clientWidth + 10; // Width of each card plus gap
//   currentIndex++;

//   if (currentIndex === cards.length) {
//     carousel.style.transition = "none";
//     currentIndex = 0;
//     carousel.style.transform = `translateX(0px)`;
//     setTimeout(() => {
//       carousel.style.transition = "transform 0.5s ease-in-out";
//       currentIndex++;
//       const translateX = -currentIndex * cardWidth;
//       carousel.style.transform = `translateX(${translateX}px)`;
//     }, 100);
//   } else {
//     const translateX = -currentIndex * cardWidth;
//     carousel.style.transform = `translateX(${translateX}px)`;
//   }
// }

// setInterval(moveCarousel, delay);

/* ---------------Crausel End------------------------------------- */

const navLinks = document.querySelectorAll(".nav-link-high");
navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    console.log("Hello");
  });
});
