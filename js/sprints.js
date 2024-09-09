// var deletBtns = document.getElementsByClassName("deleteBtn");
// const deletShow = document.getElementById("deleteShow");
// const deletHide = document.getElementById("deleteHide");

// for (let i = 0; i < deletBtns.length; i++) {
//   deletBtns[i].addEventListener("click", function () {
//     deletShow.style = "top: 0";
//   });
// }
// deleteHide.addEventListener("click", function () {
//   deletShow.style = "top: 200%";
// });
// closeee.addEventListener("click", function () {
//   deletShow.style = "top: 200%";
// });

// side nav

// const btn = document.querySelector(".btn-lg");
// const sideNav = document.querySelector(".sidenav");
// const main = document.querySelector(".side-nav-main");

// btn.addEventListener("click", function () {
//   sideNav.classList.toggle("active");
//   main.classList.toggle("active-main");
// });

// const btn2 = document.querySelector(".btn-sm");

// btn2.addEventListener("click", function () {
//   sideNav.classList.toggle("show");
//   btn2.classList.toggle("btn2show");
// });

// add sprint

function addsprint() {
  const addSprint = document.querySelector(".sprintpop");
  addSprint.style.display = "flex";
}

function hidesprint() {
  const addSprint = document.querySelector(".sprintpop");
  addSprint.style.display = "none";
}

// add projects

function addproject() {
  const addproject = document.querySelector(".add-project");
  addproject.style.display = "flex";
}

function hideproject() {
  const addproject = document.querySelector(".add-project");
  addproject.style.display = "none";
}

// testing
function addmember() {
  const addMember = document.querySelector(".add-member");
  addMember.style.display = "flex";
}

function hidemember() {
  const addMember = document.querySelector(".add-member");
  addMember.style.display = "none";
}

function addMember() {
  alert("Member added!");
}

function done() {
  hidemember();
}


// function addmember() {
//   const addMember = document.querySelector(".add-member");
//   addMember.style.display = "flex";
// }

// function hidemember() {
//   const addMember = document.querySelector(".add-member");
//   addMember.style.display = "none";
// }
