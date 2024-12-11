let en = document.querySelector("#en");
let sr = document.querySelector("#sr");


//proverava koji je aktivan jezik
if (document.getElementById("test").textContent === "Home") {
  en.classList.add("active");
  sr.classList.remove("active");
}

//klik na srpsku zastavicu
document.querySelector("#sr").onclick = () => {
  sr.classList.add("active");
  en.classList.remove("active");
};

//klik na englesku zastavicu
document.querySelector("#en").onclick = () => {
  en.classList.add("active");
  sr.classList.remove("active");
};

let searchForm = document.querySelector(".search-form");

document.querySelector("#search-btn").onclick = () => {
  searchForm.classList.toggle("active");
  navbar.classList.remove("active");
};

let navbar = document.querySelector(".navigation");

document.querySelector("#menu-btn").onclick = () => {
  navbar.classList.toggle("active");
  searchForm.classList.remove("active");
};

let section = document.querySelectorAll("section");
let navLinks = document.querySelectorAll(".header .navigation a");

window.onscroll = () => {
  searchForm.classList.remove("active");
  navbar.classList.remove("active");

  if (window.scrollY > 0) {
    document.querySelector(".header").classList.add("active");
  } else {
    document.querySelector(".header").classList.remove("active");
  }

  section.forEach((sec) => {
    let top = window.scrollY;
    let offset = sec.offsetTop - 200;
    let height = sec.offsetHeight;
    let id = sec.getAttribute("id");

    if (top >= offset && top < offset + height) {
      navLinks.forEach((link) => {
        link.classList.remove("active");
        document
          .querySelector(".header .navigation a[href*=" + id + "]")
          .classList.add("active");
      });
    }
  });
};

window.onload = () => {
  if (window.scrollY > 0) {
    document.querySelector(".header").classList.add("active");
  } else {
    document.querySelector(".header").classList.remove("active");
  }
};
var swiper = new Swiper(".home-slider", {
  spaceBetween: 25,
  effect: "fade",
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  centeredSlides: true,
  autoplay: {
    delay: 5500,
    disableOnInteraction: false,
  },
});

var swiper = new Swiper(".products-slider", {
  spaceBetween: 25,
  loop: true,
  autoplay: {
    delay: 5500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    991: {
      slidesPerView: 3,
    },
    1921: {
      slidesPerView: 5,
    },
  },
});

// test
