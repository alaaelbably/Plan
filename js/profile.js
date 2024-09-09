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
// edit prof popup

function editProf() {
  const editProf = document.querySelector(".main-edit");
  editProf.style.display = "flex";
}

function hideProf() {
  const editProf = document.querySelector(".main-edit");
  editProf.style.display = "none";
}

// edit prof popup

function editPass() {
  const editPass = document.querySelector(".main-pass");
  editPass.style.display = "flex";
}

function hidePass() {
  const editPass = document.querySelector(".main-pass");
  editPass.style.display = "none";
}
