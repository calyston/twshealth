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
    closeIcon.setAttribute('style', 'display:block !important');
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