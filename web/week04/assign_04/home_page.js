class Slideshow {
    constructor() {
        this.initSlides();
        this.initSlideshow();
    }
}

$(document).ready(function () {
    new Slideshow;
});

function initSlides() {
    this.container = $('[data-slideshow]');
    this.slides = this.container.find('img');
    this.slides.each((idx, slide) => $(slide).attr('data-slide', idx));
}

function initSlideshow() {
    this.imagesLoaded = 0;
    this.currentIndex = 0;
    this.setNextSlide();
    this.slides.each((idx, slide) => {
        $('<img>').on('load', $.proxy(this.loadImage, this)).attr('src', $(slide).attr('src'));
    });
}

function loadImage() {
    this.imagesLoaded++;
    if (this.imagesLoaded >= this.slides.length) { this.playSlideshow() }
}

function setNextSlide() {
    this.nextSlide = this.container.find(`[data-slide="${this.currentIndex}"]`).first();
    this.nextSlide.addClass('next');
}

function playSlideshow() {
    this.slideshow = window.setInterval(() => { this.performSlide() }, 3500);
}

function performSlide() {
    if (this.prevSlide) { this.prevSlide.removeClass('prev fade-out') }

    this.nextSlide.removeClass('next');
    this.prevSlide = this.nextSlide;
    this.prevSlide.addClass('prev');

    this.currentIndex++;
    if (this.currentIndex >= this.slides.length) { this.currentIndex = 0 }

    this.setNextSlide();

    this.prevSlide.addClass('fade-out');
}