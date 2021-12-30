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
}

function popupBookingOff() {
  document.getElementById("popup-booking").style.display = "none";
} 
