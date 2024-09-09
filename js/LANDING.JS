// Show the first div by default
document.addEventListener("DOMContentLoaded", () => {
  showDiv(1);
});
window.addEventListener("scroll", function () {
  const navBar = document.getElementById("navBar");
  const scrollPosition = window.scrollY;
  if (scrollPosition >= 20) {
    navBar.classList.add("scrolled-background");
  } else {
    navBar.classList.remove("scrolled-background");
  }
});
// ============================================================================
// function showDiv(divNumber) {
//   // Hide all divs
//   const allDivs = document.querySelectorAll(".content-div");
//   allDivs.forEach((div) => {
//     div.classList.remove("visible");
//   });

//   // Show the selected div
//   const selectedDiv = document.getElementById(`div${divNumber}`);
//   selectedDiv.classList.add("visible");
// }

// // Show the first div by default
// document.addEventListener("DOMContentLoaded", () => {
//   showDiv(1);
// });
const progressBar = document.getElementById("progress-bar");
const phases = document.querySelectorAll(".phase-buttons button");

const progressWidths = [2, 25, 50, 75, 100]; // Array to define the widths for each phase

// Initialize the first button as active
phases[0].classList.add("active");

function updateProgressAndShowDiv(phase) {
  // Set the progress bar width based on the phase
  progressBar.style.width = progressWidths[phase - 1] + "%";

  // Update button styles: color all buttons up to the current phase
  phases.forEach((button, index) => {
    if (index < phase) {
      button.classList.add("active");
    } else {
      button.classList.remove("active");
    }
  });

  // Show the corresponding div
  const allDivs = document.querySelectorAll(".content-div");
  allDivs.forEach((div) => {
    div.classList.remove("visible");
  });

  const selectedDiv = document.getElementById(`div${phase}`);
  selectedDiv.classList.add("visible");
}

// Show the first div by default
document.addEventListener("DOMContentLoaded", () => {
  updateProgressAndShowDiv(1);
});

// ===================================================================================
const delays = [800, 300, 500];
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry, index) => {
    console.log(entry);
    if (entry.isIntersecting) {
      setTimeout(() => {
        entry.target.classList.add("show");
      }, delays[index]); // apply respective delay
    } else {
      entry.target.classList.remove("show");
    }
  });
});
const hiddenElements = document.querySelectorAll(".hidden");
hiddenElements.forEach((el, index) => observer.observe(el));
// ============================================================================

document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll(".disappear");

  const handleScroll = () => {
    const windowHeight = window.innerHeight;

    elements.forEach((element) => {
      const elementTop = element.getBoundingClientRect().top;

      if (elementTop < windowHeight && elementTop + element.offsetHeight > 0) {
        // If element is in view
        element.classList.add("appear");
        element.classList.remove("disappear");
      } else {
        // If element is out of view
        element.classList.add("disappear");
        element.classList.remove("appear");
      }
    });
  };

  // Initial check in case some elements are already in view
  handleScroll();

  // Check on scroll
  window.addEventListener("scroll", handleScroll);
});
