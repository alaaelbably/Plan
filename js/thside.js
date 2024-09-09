var toggleBtn = document.getElementById("toggleBtn");
var sideNav = document.getElementById("sideNav");
var mainDiv = document.getElementById("mainDiv");
toggleBtn.addEventListener("click", function () {
  sideNav.classList.toggle("smaller-side");
  mainDiv.classList.toggle("bigger-div");
});
/// RESPONSIVE SIDE
const burgerButton = document.querySelector(".btn-sm");
const sideBar = document.querySelector(".my-side-nav");
burgerButton.addEventListener("click", () => {
  if (sideNav.style.display === "flex") {
    sideBar.style.display = "none";
    burgerButton.style.left = "3%"
    mainDiv.style.filter = "blur(0)"


  } else {
    sideBar.style.display = "flex";
    burgerButton.style.position = "absolute"
    burgerButton.style.left = "47%"
    mainDiv.style.filter = "blur(4px)"

  }
});

//////////////////////////////////////////////////////////////////////////////////
// dark mode
var themeToggleCheckbox = document.getElementById("theme-toggle");
var savedTheme = localStorage.getItem("theme");

if (savedTheme) {
  document.body.classList.toggle("dark-mode", savedTheme === "dark");
  themeToggleCheckbox.checked = savedTheme === "dark";
}

// Event listener for the checkbox toggle
themeToggleCheckbox.addEventListener("change", function () {
  if (this.checked) {
    document.body.classList.add("dark-mode");
    localStorage.setItem("theme", "dark");
  } else {
    document.body.classList.remove("dark-mode");
    localStorage.setItem("theme", "light");
  }
});
//////////////////////////////////////////////////////////////////////////////////
// delete popup : warning
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
//////////////////////////////////////////////////////////////////////////////////
// add task
function addtask() {
  const addTask = document.querySelector(".semi-body");
  addTask.style.display = "flex";
}

function hidetask() {
  const addTask = document.querySelector(".semi-body");
  addTask.style.display = "none";
}
//////////////////////////////////////////////////////////////////////////////////
// add projects

function addproject() {
  const addproject = document.querySelector(".add-project");
  addproject.style.display = "flex";
}

function hideproject() {
  const addproject = document.querySelector(".add-project");
  addproject.style.display = "none";
}
/////////////////////////////////////////////////////////////////////////////////
