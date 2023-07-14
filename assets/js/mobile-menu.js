const menu= document.querySelector(".navbar-links");
const menuButton= document.querySelector(".menu-button");
const cancelButton= document.querySelector(".cancel-button");

const body= document.querySelector("body");

menuButton.addEventListener("click",function() {
    menu.classList.add("active");
    menuButton.classList.add("hide");
    body.classList.add("disabledScroll");
})
cancelButton.addEventListener("click",function() {
    menu.classList.remove("active");
    menuButton.classList.remove("hide");
    body.classList.remove("disabledScroll");
})
