let slideIndex = 1;
window.onload = () => {
    showSlides(slideIndex);
    setInterval(() => showSlides(slideIndex++), 5000);
};

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;

    const slides = document.getElementsByClassName("carousel__item");
    console.log(`showSlides called ${n} ${slides.length}`);
    const dots = document.getElementsByClassName("carousel__dot__item");
    if (n >= slides.length) {
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
}