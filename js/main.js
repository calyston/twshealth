//JavaScript

//Free Workout Plan Page

//Scroll Into View

function getPlan() {
  document.querySelector("#getPlan").scrollIntoView({
    behavior: "smooth",
    block: "start",
  });
}

//Hamburger Menu

const menu = document.querySelector(".hamburger-menu");
const hamburger = document.querySelector(".hamburger");

function toggleMenu() {

  const closeIcon = document.querySelector(".close-icon");
  const menuIcon = document.querySelector(".menu-icon");
  const body = document.querySelector("body");

  if (menu.classList.contains("showMenu")) {
    menu.classList.remove("showMenu");
    body.classList.remove("hideOverflow");
    closeIcon.style.display = "none";
    menuIcon.style.display = "block";
  } else {
    menu.classList.add("showMenu");
    body.classList.add("hideOverflow");
    closeIcon.style.display = "block";
    menuIcon.style.display = "none";
  }
}

hamburger.addEventListener("click", toggleMenu);

//To Contact
function toContact() {
  document.querySelector("#contact").scrollIntoView({
    behavior: "smooth",
    block: "start",
  });
}

//Subscribe Pop Up

// window.addEventListener("load", function () {
//   setTimeout(
//     function popupSubscribeOn(event) {
//       document.getElementById("popup-subscribe").style.display = "block";
//       document.getElementById("overlay").style.display = "block";
//     },
//     4000
//   )
// });

function popupSubscribeOff() {
  document.getElementById("popup-subscribe").style.display = "none";
  document.getElementById("overlay").style.display = "none";
} 