const navTabs = document.querySelector("#navTabs");
function menuToggleBtn(e) {
  if (e.classList.contains("fa-bars")) {
    e.classList.remove("fa-bars");
    e.classList.add("fa-xmark");
    navTabs.classList.remove("left-[-100vw]");
    navTabs.classList.add("left-0");
  } else {
    e.classList.add("fa-bars");
    e.classList.remove("fa-xmark");
    navTabs.classList.remove("left-0");
    navTabs.classList.add("left-[-100vw]");
  }
}
