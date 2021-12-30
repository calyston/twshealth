//JavaScript

//Free Workout Plan Page

//Scroll Into View

function getPlan() {
  document.querySelector("#getPlan").scrollIntoView({
    behavior: "smooth",
    block: "start",
  });
}

//Book A Call Pop Up

function popupBookingOn() {
  document.getElementById("popup-booking").style.display = "block";
  document.getElementById("overlay").style.display = "block";
}

function popupBookingOff() {
  document.getElementById("popup-booking").style.display = "none";
  document.getElementById("overlay").style.display = "none";
}

//Subscribe Pop Up

window.addEventListener("load", function () {
  setTimeout(
    function popupSubscribeOn(event) {
      document.getElementById("popup-subscribe").style.display = "block";
      document.getElementById("overlay").style.display = "block";
    },
    4000
  )
});

function popupSubscribeOff() {
  document.getElementById("popup-subscribe").style.display = "none";
  document.getElementById("overlay").style.display = "none";
} 