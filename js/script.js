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

const carousel = document.querySelector(".carousel-cu");
const leftArrowBtn = document.querySelector(".leftSwipeArrow");
const rightArrowBtn = document.querySelector(".rightSwipeArrow");

let isDragging = false,
  startX,
  startScrollLeft;

const dragStart = (e) => {
  isDragging = true;
  startX = e.pageX;
  startScrollLeft = carousel.scrollLeft;
  carousel.classList.add("select-none");
  carousel.classList.add("cursor-grab");
};
const dragStop = () => {
  isDragging = false;
  carousel.classList.remove("select-none");
  carousel.classList.remove("cursor-grab");
};

const dragging = (e) => {
  if (!isDragging) return;
  carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
  // console.log(carousel.scrollLeft);
};

//left click will reduce the scroll position of the scroll causing the slider to swipe left.
leftArrowBtn.addEventListener("click", () => {
  carousel.scrollLeft -= 400;
});

//right click will increase the scroll position of the scroll causing the slider to swipe right.
rightArrowBtn.addEventListener("click", () => {
  carousel.scrollLeft += 400;
});

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
