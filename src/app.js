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

// import "bootstrap";
import Modal from "bootstrap.native/dist/components/modal-native";
import Collapse from "bootstrap.native/dist/components/collapse-native.esm";

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
  // console.log("scrolling", e);
  window.pageYOffset > 0
    ? pageHeader.classList.add("scrolled")
    : pageHeader.classList.remove("scrolled");
});

window.pageYOffset != 0
  ? window.scrollTo(window.scrollX, window.scrollY + 1)
  : null;

stackToggles.forEach((toggle) => {
  toggle.addEventListener("click", toggleStack);
});

function toggleStack(e) {
  const toggle = e.target.parentNode;
  const toggleWrapper = toggle.parentNode;
  const toggleParent = toggle.parentNode.parentNode;
  const toggleParentOffsetTop =
    toggleParent.getBoundingClientRect().top +
    window.scrollY -
    pageHeaderHeight -
    30;
  const localToggleGroup = toggleParent.querySelectorAll("[data-stack]");

  // console.log(toggle, toggleWrapper);


  // hide all
  localToggleGroup.forEach((tog) => {
    tog.classList.remove("active");
    toggleParent
      .querySelector(`[data-stack-content="${tog.dataset.stack}"]`)
      .classList.remove("active");
  });

  toggle.classList.add("active");

  toggleParent
    .querySelector(`[data-stack-content="${toggle.dataset.stack}"]`)
    .classList.add("active");

  // height to set
  const heightToSet = toggleParent.querySelector('.stack-content.active').clientHeight;

  console.log(heightToSet);

  toggleWrapper.style.minHeight = heightToSet + 'px';

  scroll({
    top: toggleParentOffsetTop,
    behavior: "smooth",
  });
}

// load some css filer after initial page load that are not critical
window.onload = function () {
  loadCSSFilesAfterLoad();
};
