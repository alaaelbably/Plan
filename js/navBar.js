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
