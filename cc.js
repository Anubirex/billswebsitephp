//////BEGINNING OF COUNTER FUNCTIONALITY/////////////////////////////////
document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = parseInt(entry.target.getAttribute('data-target'), 10);
                animateCounter(entry.target, target);
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 1 // Viewport Threshold Adjust as Needed
    });

    counters.forEach(counter => {
        observer.observe(counter);
    });
});

function animateCounter(element, target) {
    let current = 0;
    const increment = target / 100; // Adjust for speed

    const updateCounter = setInterval(() => {
        current += increment;
        if (current > target) {
            element.textContent = target.toLocaleString();
            clearInterval(updateCounter);
        } else {
            element.textContent = Math.ceil(current).toLocaleString();
        }
    }, 10); // Adjust interval for speed
}
//////END OF COUNTER FUNCTIONALITY/////////////////////////////////
//////BEGINNING OF COMMENDATIONS ANIMATION/////////////////////////////////
document.addEventListener('DOMContentLoaded', () => {
    const track = document.querySelector('.commendations-track');
    const slides = Array.from(track.children);
    const slideWidth = 270;
    let currentIndex = 0;
    let slideInterval;

    const moveToNextSlide = () => {
        const totalSlides = slides.length;
        const numberOfOriginals = totalSlides / 2;

        if (currentIndex < numberOfOriginals) {
            track.style.transform = `translateX(-${slideWidth * (++currentIndex)}px)`;
        } else {
            track.style.transition = 'none';
            track.style.transform = 'translateX(0)';
            currentIndex = 0;
            setTimeout(() => {
                track.style.transition = 'transform 0.5s ease';
                moveToNextSlide();
            }, 50);
        }
    };

    const startSlideShow = () => {
        slideInterval = setInterval(moveToNextSlide, 2000);
        moveToNextSlide();
    };

    startSlideShow();
});
//////END OF COMMENDATIONS ANIMATION/////////////////////////////////