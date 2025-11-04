function showHeaderMenu() {
  document
    .getElementById("headerMenu")
    .classList.toggle("header__menu-btn__nav-show");
}

const multiDefault = () => {
  const elements = document.querySelectorAll(
    ".signuplogin__forms__form__select"
  );
  elements.forEach((el) => {
    const choices = new Choices(el, {
      searchEnabled: false,
      shouldSort: false,
    });
  });
};
multiDefault();

let btnPass = document.querySelectorAll(".signuplogin__forms__form__btn-pass");
btnPass.forEach(function (btn) {
  btn.onclick = function () {
    let target = this.getAttribute("data-target"),
      inputPass = document.querySelector(target);

    if (inputPass.getAttribute("type") === "password") {
      inputPass.setAttribute("type", "text");
      btn.classList.add("is-active-btnpass");
    } else {
      inputPass.setAttribute("type", "password");
      btn.classList.remove("is-active-btnpass");
    }
  };
});

const slider = document.getElementById("slider");

noUiSlider.create(slider, {
  start: [18, 99],
  connect: true,
  step: 9,
  margin: 9,
  padding: [18, 0],
  tooltips: wNumb({ decimals: 0 }),
  range: {
    min: 0,
    max: 99,
  },
});

slider.style.height = "0.5rem";


const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});



/* const rangeInput = document.querySelectorAll(".catalog__section2__filter__filters__lvl2-item__rangeinput input"),
progress = document.querySelector(".catalog__section2__filter__filters__lvl2-item__rangeslider .catalog__section2__filter__filters__lvl2-item__rangeslider-progress"),
rangeBtn = document.querySelectorAll(".catalog__section2__filter__filters__lvl2-item__rangeinput input::-webkit-slider-thumb");

let ageGap = 9;

rangeInput.forEach(input =>{
  input.addEventListener("input", e =>{
    let minVal = parseInt(rangeInput[0].value),
    maxVal = parseInt(rangeInput[1].value);

    if(maxVal - minVal < ageGap){
      if(e.target.className === "catalog__section2__filter__filters__lvl2-item__rangeinput-min"){
        rangeInput[0].value = maxVal - ageGap;
      }else{
        rangeInput[1].value = minVal + ageGap;
      }
    }else{
      progress.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      progress.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
      rangeBtn.style.content = (minVal / rangeInput[0].max) * 100 + "%";
    }
  });
});*/

//--------------------------------------------------------------------------------------------------------------
/*const dropContainer = document.getElementById("office-section1-advertisement-imagecontainer")
  const fileInput = document.getElementById("office__section1__advertisement__imagecontainer-input")

  dropContainer.addEventListener("dragover", (e) => {
    // prevent default to allow drop
    e.preventDefault()
  }, false)

  dropContainer.addEventListener("dragenter", () => {
    dropContainer.classList.add("drag-active")
  })

  dropContainer.addEventListener("dragleave", () => {
    dropContainer.classList.remove("drag-active")
  })

  dropContainer.addEventListener("drop", (e) => {
    e.preventDefault()
    dropContainer.classList.remove("drag-active")
    fileInput.files = e.dataTransfer.files
  })*/
