//////BEGINNING OF REVIEW CARROUSEL FUNCTIONALITY/////////////////////////////////
document.addEventListener('DOMContentLoaded', () => {
    const slidesContainer = document.querySelector('.carousel-slides');
    const slides = Array.from(document.querySelectorAll('.carousel-slide'));
    const prevButton = document.querySelector('.carousel-nav.prev');
    const nextButton = document.querySelector('.carousel-nav.next');
    let currentSlideIndex = 1; 
    let slideInterval;
    let interactionTimeout; 

    const updateCarousel = () => {
        const slideWidth = slides[0].clientWidth;
        const offset = -slideWidth * currentSlideIndex;
        slidesContainer.style.transition = 'transform 0.5s ease';
        slidesContainer.style.transform = `translateX(${offset}px)`;

        if (currentSlideIndex === 0 || currentSlideIndex === slides.length - 1) {
            setTimeout(() => {
                slidesContainer.style.transition = 'none'; 
                currentSlideIndex = currentSlideIndex === 0 ? slides.length - 2 : 1;
                slidesContainer.style.transform = `translateX(-${slideWidth * currentSlideIndex}px)`;
            }, 500);
        }
    };

    const startAutoSlide = () => {
        slideInterval = setInterval(moveToNextSlide, 5000);
    };

    const pauseAutoSlide = () => {
        clearInterval(slideInterval);
        clearTimeout(interactionTimeout);
        interactionTimeout = setTimeout(startAutoSlide, 5000);
    };

    const moveToNextSlide = () => {
        currentSlideIndex = (currentSlideIndex + 1) % slides.length;
        updateCarousel();
    };

    const moveToPrevSlide = () => {
        currentSlideIndex = (currentSlideIndex - 1 + slides.length) % slides.length;
        updateCarousel();
    };

    prevButton.addEventListener('click', () => {
        moveToPrevSlide();
        pauseAutoSlide();
    });

    nextButton.addEventListener('click', () => {
        moveToNextSlide();
        pauseAutoSlide();
    });

    startAutoSlide();
    updateCarousel();
});
//////END OF CARROUSEL FUNCTIONALITY/////////////////////////////////