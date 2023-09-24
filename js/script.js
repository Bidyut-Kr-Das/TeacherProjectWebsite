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

const bannerWrapper = document.querySelector(".bannerCarousel");

let counter = 0;
const scroll = () => {
  if (counter === 3) counter = 0;
  // console.log(counter);
  /*template literal uses backtick */
  bannerWrapper.style.left = `-${counter * 100}vw`;
  counter++;
};
//uncomment the below line to activate the carousel of banners
// const interval = setInterval(scroll, 3000);

//todo toast pop up function
const popUp = (messageToast) => {
  console.log(messageToast);
  const x = document.querySelector("#snackbar");
  x.innerHTML = messageToast;
  x.classList.add("show");
  x.classList.remove("hidden");
  setTimeout(() => {
    x.classList.remove("show");
    x.classList.add("hidden");
  }, 3000);
};

//ajax php calling
$(document).ready(() => {
  //contact us form
  $("#contact-form-submit-btn").on("click", (e) => {
    e.preventDefault();
    let Fnameget = $("#FName").val();
    let Lnameget = $("#LName").val();
    let emailget = $("#email").val();
    let Pnumberget = $("#Pnumber").val();
    let subjectget = $("input[name='subjectContact']:checked").val();
    let messageget = $("#textBox").val();

    $.ajax({
      url: "functions/contactSubmission.php",
      type: "POST",
      data: {
        FName: Fnameget,
        LName: Lnameget,
        email: emailget,
        phoneNumber: Pnumberget,
        subject: subjectget,
        message: messageget,
      },
      success: (res) => {
        popUp(res);
        $("#FName").val("");
        $("#LName").val("");
        $("#email").val("");
        $("#Pnumber").val("");
        // $("input[name='subjectContact']:checked").val();
        $("#textBox").val("");
      },
    });
  });
});
