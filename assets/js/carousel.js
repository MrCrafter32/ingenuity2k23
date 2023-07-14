const slidesContainer = document.getElementById("slides-container");
const slide = document.querySelector(".slide");
const prevButton = document.getElementById("slide-arrow-prev");
const nextButton = document.getElementById("slide-arrow-next");

nextButton.addEventListener("click", () => {
  const slideWidth = slide.clientWidth;
  slidesContainer.scrollLeft += slideWidth;
});

prevButton.addEventListener("click", () => {
  const slideWidth = slide.clientWidth;
  slidesContainer.scrollLeft -= slideWidth;
});

/*const slidesContainer1 = document.getElementById("slides-container1");
const slide1 = document.querySelector("#slider1 .slide");
const prevButton1 = document.getElementById("slide-arrow-prev1");
const nextButton1 = document.getElementById("slide-arrow-next1");

nextButton1.addEventListener("click", () => {
  const slideWidth = slide1.clientWidth;
  slidesContainer1.scrollLeft += slideWidth;
});

prevButton1.addEventListener("click", () => {
  const slideWidth = slide1.clientWidth;
  slidesContainer1.scrollLeft -= slideWidth;
});

/*const slidesContainer2 = document.getElementById("slides-container2");
const slide2 = document.querySelector("#slider2 .slide");
const prevButton2 = document.getElementById("slide-arrow-prev2");
const nextButton2 = document.getElementById("slide-arrow-next2");

nextButton2.addEventListener("click", () => {
  const slideWidth = slide2.clientWidth;
  slidesContainer2.scrollLeft += slideWidth;
});

prevButton2.addEventListener("click", () => {
  const slideWidth = slide2.clientWidth;
  slidesContainer2.scrollLeft -= slideWidth;
});*/
