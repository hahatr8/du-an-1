const imgPosition = document.querySelectorAll('.aspect-ratio-169 img')
const imgContainer = document.querySelector('.aspect-ratio-169')
const dotItem = document.querySelectorAll('.dot')
let imgNumber = imgPosition.length
let index = 1

imgPosition.forEach(function (img, index) {
    img.style.left = index * 100 + "%"
    dotItem[index].addEventListener("click", function () {
        slider(index)
    })
})

function plusSlides(n) {
    if (index >= imgNumber) index = 0 
    slider(index+= n);
  }

function currentSlide(n) {
    slider(index = n);
  }

function imgSlider() {
    index++;
    if (index >= imgNumber) index = 0
    slider(index)

}

function slider(index) {
    imgContainer.style.left = "-" + index * 100 + "%"
    const dotActive = document.querySelector(".active")
    dotActive.classList.remove("active")
    dotItem[index].classList.add("active")
}

setInterval(imgSlider, 8000)

