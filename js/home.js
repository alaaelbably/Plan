// side navbar

// document.addEventListener("DOMContentLoaded", function () {
//   const btn = document.querySelector(".btn-lg");
//   const sideNav = document.querySelector(".sidenav");
//   const main = document.querySelector(".front-odd");

//   if (btn && sideNav && main) {
//     btn.addEventListener("click", function () {
//       sideNav.classList.toggle("active");
//       main.classList.toggle("active-main");
//     });
//   } else {
//     console.error("One or more elements not found");
//   }
// });

var toggleBtn = document.getElementById("toggleBtn");
var sideNav = document.getElementById("sideNav");
var mainDiv = document.getElementById("mainDiv");
toggleBtn.addEventListener("click", function () {
  sideNav.classList.toggle("smaller-side");
  mainDiv.classList.toggle("bigger-div");
});

// add projects

function addproject() {
  const addproject = document.querySelector(".add-project");
  addproject.style.display = "flex";
}

function hideproject() {
  const addproject = document.querySelector(".add-project");
  addproject.style.display = "none";
}
