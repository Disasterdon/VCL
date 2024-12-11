let black_color = document.getElementById("black");
let white_color = document.getElementById("white");
let yellow_color = document.getElementById("yellow");
let light_blue_color = document.getElementById("light_blue");
let purple_color = document.getElementById("purple");
let orange_color = document.getElementById("orange");
let pink_color = document.getElementById("pink");
let green_color = document.getElementById("green");

let dirColor = "black_cables";
let current_color = black_color;

let current_pin = 1;
var activeBtn = document.querySelectorAll(".cable");
var activePinBtn = document.querySelectorAll(".pin_btn")

for (var checkColor of activeBtn) {
  checkColor.addEventListener("click", btnIsActive);
}

for (var checkBtnPin of activePinBtn) {
  checkBtnPin.addEventListener("click", PinbtnIsActive);
}


// pin btn picker
var current_pinBtn = "connector_24pin";
let activeClassPinBtn = document.querySelector(".pin_btn-picker");
let activeClassPinSection = document.querySelector(".configuration_section");
var content_show = '0';
function PinbtnIsActive(){
  current_pinBtn = this.classList[0];
  content_show = this.classList[1];
  for (let delClass of activeClassPinBtn.children) {
    delClass.classList.remove("active");
  }
  this.classList.add("active");
  for (let delClass of activeClassPinSection.children) {
    delClass.classList.add("hidden");
  }
  activeClassPinSection.children[content_show].classList.remove("hidden")
}


// collor picker
let activeClass = document.querySelector(".color-picker");

function btnIsActive() {
  for (let delClass of activeClass.children) {
    delClass.classList.remove("active");
  }
  this.classList.add("active");
  dirColor = this.classList[0];

  var activePin = document.querySelectorAll(".area-pin");

  for (var checkPin of activePin) {
    checkPin.addEventListener("click", pinIsActive);
  }
  function pinIsActive() {
    current_pin = this.classList[1];
    document.querySelector("#"+current_pinBtn+" > .pin_" + current_pin).src =
      "/img/konfigurator/24pin_atx/" + dirColor + "/" + current_pin + ".png";
  }
}