let slideIndex = 1;
let slideInterval = 8000;

const plusSlides = (n) => {
    showSlides((slideIndex += n));
};

const currentSlide = (n) => {
    showSlides((slideIndex = n));
};

const showSlides = (n) => {
    let i;
    let slides = document.getElementsByClassName("slider__slide");
    let dots = document.getElementsByClassName("slider__dots-item");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
};

document.querySelector(".slider__btn--prev").addEventListener("click", () => {
    plusSlides(-1);
});

document.querySelector(".slider__btn--next").addEventListener("click", () => {
    plusSlides(1);
});

let dots = document.getElementsByClassName("dot");
for (let i = 0; i < dots.length; i++) {
    dots[i].addEventListener("click", () => {
        currentSlide(i + 1);
    });
}

const startAutoSlide = () => {
    setInterval(() => {
        plusSlides(1);
    }, slideInterval);
};

showSlides(slideIndex);
startAutoSlide();
