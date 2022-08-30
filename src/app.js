// import "bootstrap";
import Modal from "bootstrap.native/dist/components/modal-native";
import Collapse from "bootstrap.native/dist/components/collapse-native.esm";
import AOS from "aos";

AOS.init({
  duration: 800,
  once: true,
});

var cssFiles = [
  "https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css",
];

function loadCSSFilesAfterLoad() {
  cssFiles.forEach((file) => {
    var link = document.createElement("link");
    link.href = file;
    link.type = "text/css";
    link.rel = "stylesheet";
    link.media = "screen, print";

    document.getElementsByTagName("head")[0].appendChild(link);
  });
}

// const myModal = document.getElementById("exampleModal");
const navbarCollapseMenu = document.getElementById("mobile-menu");
const pageHeader = document.querySelector("#page-header");
const pageHeaderHeight = pageHeader.clientHeight;
const body = document.body;
const stackToggles = document.querySelectorAll("[data-stack]");

// body.style.paddingTop = pageHeaderHeight + "px";

// let modal = new Modal(myModal);
let navbarCollapse = new Collapse(navbarCollapseMenu);

// modal.toggle();

window.addEventListener("scroll", (e) => {
  window.pageYOffset > 0
    ? pageHeader.classList.add("scrolled")
    : pageHeader.classList.remove("scrolled");
});

// load some css filer after initial page load that are not critical
window.onload = function () {
  loadCSSFilesAfterLoad();
};

// lazy loading images script
let options = {
  root: null,
  rootMargin: "0px",
  threshold: 0.25,
};
let callback = (entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      let imageUrl = entry.target.getAttribute("data-src");
      if (imageUrl) {
        entry.target.src = imageUrl;
        observer.unobserve(entry.target);
      }
    }
  });
};
let observer = new IntersectionObserver(callback, options);
let lazyImagesToLoad = document.querySelectorAll(".lazy-image");
lazyImagesToLoad.forEach((el) => {
  observer.observe(el);
});

// LAZY LOAD IMAGES
var lazyImages = document.querySelectorAll(".lazy-image");

function lazyLoadImage(img) {
  // img.src = img.dataset.src;
  // img.classList.remove('lazy-image');

  let options = {
    root: null,
    rootMargin: "0px",
    threshold: 0.25,
  };
  let callback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting && entry.target.className === "lazy-image") {
        let imageUrl = entry.target.getAttribute("data-src");
        if (imageUrl) {
          entry.target.src = imageUrl;
          observer.unobserver(entry.target);
        }
      }
    });
  };
  let observer = new IntersectionObserver(callback, options);
  observer.observe(img);
}
