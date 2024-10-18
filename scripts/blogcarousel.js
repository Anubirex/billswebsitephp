////////////////LEARNING HUB///////////////////////////////
document.addEventListener('DOMContentLoaded', () => {
    const carousels = document.querySelectorAll('.blog-lat-carousel-container, .blog-pop-carousel-container');

    carousels.forEach(carouselContainer => {
        const carousel = carouselContainer.querySelector('.learn-blog-lat-carousel, .learn-blog-pop-carousel');
        const slides = carousel.querySelectorAll('.blog-post-latest, .blog-post-popular');
        let currentIndex = 0;

        const getSlideWidth = () => {
            const slidesToShow = window.innerWidth < 768 ? 2 : 4;
            return carousel.offsetWidth / slidesToShow;
        };

        const updateCarousel = () => {
            const slideWidth = getSlideWidth();
            const distance = currentIndex * slideWidth;
            slides.forEach(slide => {
                slide.style.transform = `translateX(-${distance}px)`;
            });
        };

        const prevButton = carouselContainer.querySelector('.latest-prev, .pop-prev');
        const nextButton = carouselContainer.querySelector('.latest-next, .pop-next');

        prevButton.addEventListener('click', () => {
            currentIndex = Math.max(currentIndex - 1, 0);
            updateCarousel();
        });

        nextButton.addEventListener('click', () => {
            const slidesToShow = window.innerWidth < 768 ? 2 : 4;
            const maxIndex = slides.length - slidesToShow;
            currentIndex = Math.min(currentIndex + 1, maxIndex);
            updateCarousel();
        });

        updateCarousel();
    });

    // Responsive adjustment
    window.addEventListener('resize', () => {
        carousels.forEach(carouselContainer => {
            carouselContainer.querySelectorAll('.learn-blog-lat-carousel, .learn-blog-pop-carousel')
                .forEach(updateCarousel);
        });
    });
});
////////////////////////LEARNING HUB END//////////////////////////////////