// side nav

const btn = document.querySelector(".btn-lg");
const sideNav = document.querySelector(".sidenav");
const main = document.querySelector(".side-nav-main");

btn.addEventListener("click", function () {
  sideNav.classList.toggle("active");
  main.classList.toggle("active-main");
});

const btn2 = document.querySelector(".btn-sm");

btn2.addEventListener("click", function () {
  sideNav.classList.toggle("show");
  btn2.classList.toggle("btn2show");
});

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

// add task

function addtask() {
  const addTask = document.querySelector(".semi-body");
  addTask.style.display = "flex";
}

function hidetask() {
  const addTask = document.querySelector(".semi-body");
  addTask.style.display = "none";
}
