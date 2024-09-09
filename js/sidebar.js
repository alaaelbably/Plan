var deletBtns = document.getElementsByClassName("deleteBtn");
const deletShow = document.getElementById("deleteShow");
const deletHide = document.getElementById("deleteHide");

for (let i = 0; i < deletBtns.length; i++) {
  deletBtns[i].addEventListener("click", function () {
    deletShow.style = "top: 0";
  });
}
deleteHide.addEventListener("click", function () {
  deletShow.style = "top: 200%";
});
closeee.addEventListener("click", function () {
  deletShow.style = "top: 200%";
});

// side nav

// const btn = document.querySelector(".btn-lg");
// const sideNav = document.querySelector(".sidenav");
// const main = document.querySelector(".front-odd");

// btn.addEventListener("click", function () {
//   sideNav.classList.toggle("active");
//   main.classList.toggle("active-main");
// });

// const btn2 = document.querySelector(".btn-sm");

// btn2.addEventListener("click", function () {
//   sideNav.classList.toggle("show");
//   btn2.classList.toggle("btn2show");
// });

document.addEventListener("DOMContentLoaded", function () {
  const btn = document.querySelector(".btn-lg");
  const sideNav = document.querySelector(".sidenav");
  const main = document.querySelector(".front-odd");

  if (btn && sideNav && main) {
    btn.addEventListener("click", function () {
      sideNav.classList.toggle("active");
      main.classList.toggle("active-main");
    });
  } else {
    console.error("One or more elements not found");
  }
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
