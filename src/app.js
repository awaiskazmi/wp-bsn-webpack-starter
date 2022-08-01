// import "bootstrap";
import Modal from "bootstrap.native/dist/components/modal-native";
import Collapse from "bootstrap.native/dist/components/collapse-native.esm";

// const myModal = document.getElementById("exampleModal");
const navbarCollapseMenu = document.getElementById("headerNavbarMenu");

// let modal = new Modal(myModal);
let navbarCollapse = new Collapse(navbarCollapseMenu);

console.log("bootstrap is in", navbarCollapse);

// modal.toggle();
