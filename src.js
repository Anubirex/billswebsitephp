// BEGINNING OF BURGER MENU FUNCTIONALITY///////////////////////////////
document.addEventListener('DOMContentLoaded', () => {
    const burgerMenu = document.getElementById('burgerMenu');
    const backButton = document.querySelector('.arrow');
    const bmMainMenu = document.querySelector('.bm-main-menu');
    const bmServiceMenu = document.querySelector('.bm-service-menu');
    const bmAboutMenu = document.querySelector('.bm-about-menu');
    const menuContent = document.getElementById('menuContent');
    const backButtonContainer = document.getElementById('back-button-container');

    function isSubmenuActive() {
        return bmServiceMenu.classList.contains('bm-service-menu-active') || bmAboutMenu.classList.contains('bm-about-menu-active');
    }

    function updateScrollLock() {
        if (bmMainMenu.classList.contains('bm-main-menu-active') || isSubmenuActive()) {
            document.body.classList.add('no-scroll');
        } else {
            document.body.classList.remove('no-scroll');
        }
    }

    function updateBackButtonVisibility() {
        backButton.style.display = isSubmenuActive() ? 'block' : 'none';
    }
    function showMenu(menuToShow) {
        bmMainMenu.classList.remove('bm-main-menu-active');
        bmServiceMenu.classList.remove('bm-service-menu-active');
        bmAboutMenu.classList.remove('bm-about-menu-active');

        menuToShow.classList.add(`${menuToShow.className}-active`);

        updateBackButtonVisibility();
        updateScrollLock();


        menuContent.style.display = 'block';
    }

    function hideAllMenus() {
        bmMainMenu.classList.remove('bm-main-menu-active');
        bmServiceMenu.classList.remove('bm-service-menu-active');
        bmAboutMenu.classList.remove('bm-about-menu-active');
        updateBackButtonVisibility();
        updateScrollLock();

        menuContent.style.display = 'none';
    }


    burgerMenu.addEventListener('click', () => {
        if (bmMainMenu.classList.contains('bm-main-menu-active') || isSubmenuActive()) {
            hideAllMenus();
        } else {
            showMenu(bmMainMenu);
        }
    });

    backButton.addEventListener('click', () => {
        bmServiceMenu.classList.remove('bm-service-menu-active');
        bmAboutMenu.classList.remove('bm-about-menu-active');

        bmMainMenu.classList.add('bm-main-menu-active');

        updateBackButtonVisibility();
        updateScrollLock();

        menuContent.style.display = 'block';
    });

    bmMainMenu.addEventListener('click', (event) => {
        if (event.target.closest('.bm-main-menu-item')) {
            const menuItemText = event.target.textContent.trim();
            if (menuItemText === 'Services') {
                showMenu(bmServiceMenu);
            } else if (menuItemText === 'About Us') {
                showMenu(bmAboutMenu);
            }
        }
    });

    hideAllMenus();
});
//////END OF BURGER MENU FUNCTIONALITY/////////////////////////////////
//////BEGINNING OF FORM FUNCTIONALITY/////////////////////////////////
document.addEventListener('DOMContentLoaded', () => {
    const formOverlay = document.getElementById('serviceForm');
    const desktopToggleButton = document.getElementById('toggleFormButton');
    const mobileToggleButton = document.querySelector('.mobile-service-button-div');
    const cancelButton = formOverlay.querySelector('.cancel');

    function toggleFormDisplay() {
        const isFormVisible = formOverlay.style.display === 'flex';
        formOverlay.style.display = isFormVisible ? 'none' : 'flex';

        if (window.innerWidth <= 768) {
            document.body.classList.toggle('no-scroll', !isFormVisible);
        }

        if (!isFormVisible) {
            setTimeout(() => {
                document.addEventListener('click', closeFormIfClickedOutside);
            }, 0);
        } else {
            document.removeEventListener('click', closeFormIfClickedOutside);
        }
    }

    function closeFormIfClickedOutside(event) {
        if (!formOverlay.contains(event.target) && event.target !== desktopToggleButton && event.target !== mobileToggleButton) {
            toggleFormDisplay();
        }
    }

    [desktopToggleButton, mobileToggleButton].forEach(button => {
        if (button) {
            button.addEventListener('click', toggleFormDisplay);
        }
    });

    cancelButton.addEventListener('click', toggleFormDisplay);
});
//////END OF FORM FUNCTIONALITY/////////////////////////////////
//////BEGINNING OF SOCIAL BAR FUNCTIONALITY/////////////////////////////////
document.addEventListener('DOMContentLoaded', () => {
    const footer = document.querySelector('.site-footer');
    const socialSidebar = document.querySelector('.social-sidebar');
    const originalTopPosition = '50%';
    const adjustedTopPosition = '20%';

    function adjustSocialSidebarPosition() {
        const footerRect = footer.getBoundingClientRect();
        const footerVisible = footerRect.top < window.innerHeight;

        if (footerVisible) {
            socialSidebar.style.top = adjustedTopPosition;
        } else {
            socialSidebar.style.top = originalTopPosition;
        }
    }

    window.addEventListener('scroll', adjustSocialSidebarPosition);

    adjustSocialSidebarPosition();
});
//////END OF SOCIAL BAR FUNCTIONALITY/////////////////////////////////
//////BEGINNING OF CARROUSEL FUNCTIONALITY/////////////////////////////////
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
//////BEGINNING OF BODY FORM FUNCTIONALITY/////////////////////////////////
document.addEventListener('DOMContentLoaded', () => {
    const formOverlay = document.getElementById('bodyserviceForm');
    const openFormButtons = document.querySelectorAll('.open-form-button');
    const closeButton = document.querySelector('.body-form-container .cancel');
    const pageOverlay = document.getElementById('pageOverlay');

    function toggleForm() {
        const isFormVisible = formOverlay.style.display === 'block';
        formOverlay.style.display = isFormVisible ? 'none' : 'block';
        pageOverlay.style.display = isFormVisible ? 'none' : 'block';
        if (window.innerWidth <= 768) {
            document.body.classList.toggle('no-scroll', formOverlay.style.display === 'block');
        }
    }

    openFormButtons.forEach(button => {
        button.addEventListener('click', toggleForm);
    });

    closeButton.addEventListener('click', toggleForm);

    pageOverlay.addEventListener('click', toggleForm);

    formOverlay.addEventListener('click', (event) => {
        event.stopPropagation();
    });
});
//////END OF BODY FORM FUNCTIONALITY/////////////////////////////////
//////BEGINNING OF ANIMATION FUNCTIONALITY/////////////////////////////////
document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const animationClass = element.dataset.animation || 'zoom-in-right'; // Default animation class
                element.classList.add(animationClass);
                element.classList.remove('initial-state');

                // Listen for the end of the animation
                element.addEventListener('animationend', () => {
                    element.classList.remove(animationClass);
                    element.classList.add('visible');
                }, { once: true });

                observer.unobserve(element);
            }
        });
    }, { threshold: 0.5 });

    const targets = document.querySelectorAll('[data-animation]');
    targets.forEach(target => {
        target.classList.add('initial-state'); // Add initial state class
        observer.observe(target);
    });
});
//////END OF ANIMATION FUNCTIONALITY/////////////////////////////////
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
///////HEADER SCROLL LISTENER BEGIN//////////////////////////
window.addEventListener('scroll', function () {
    if (window.innerWidth > 1250) {
        var headerImage = document.querySelector('.header-logo');
        if (scrollY > 0) {
            headerImage.classList.add('header-logo-small');
        } else {
            headerImage.classList.remove('header-logo-small');
        }
    }
});
/////////HEADER SCROLL LISTENER END////////////////////////
/////////PHOTO GALLERY FUNCTION BEGIN///////////////////////
function changeImage(selectedThumbnail) {
    document.querySelectorAll('.thumbnail').forEach(thumb => {
        thumb.classList.remove('active');
    });

    selectedThumbnail.classList.add('active');

    document.getElementById('main-image').src = selectedThumbnail.src;
}
changeImage(document.querySelector('.thumbnail'));
function scrollToThumbnail(thumbnail) {
    const container = document.querySelector('.areas-gallery-imgs');
    const containerRect = container.getBoundingClientRect();
    const thumbnailRect = thumbnail.getBoundingClientRect();

    if (thumbnailRect.left < containerRect.left) {
        // Thumbnail is to the left of the visible area
        container.scrollLeft -= (containerRect.left - thumbnailRect.left);
    } else if (thumbnailRect.right > containerRect.right) {
        // Thumbnail is to the right of the visible area
        container.scrollLeft += (thumbnailRect.right - containerRect.right);
    }
}
function nextImage() {
    const thumbnails = document.querySelectorAll('.thumbnail');
    const current = document.querySelector('.thumbnail.active');
    let nextIndex = Array.from(thumbnails).indexOf(current) + 1;

    if (nextIndex >= thumbnails.length) {
        nextIndex = 0; // Loop back to the first thumbnail
    }

    changeImage(thumbnails[nextIndex]);
    scrollToThumbnail(thumbnails[nextIndex]);
}
function previousImage() {
    const thumbnails = document.querySelectorAll('.thumbnail');
    const current = document.querySelector('.thumbnail.active');
    let prevIndex = Array.from(thumbnails).indexOf(current) - 1;

    if (prevIndex < 0) {
        prevIndex = thumbnails.length - 1; // Loop to the last thumbnail
    }

    changeImage(thumbnails[prevIndex]);
    scrollToThumbnail(thumbnails[prevIndex]);
}
/////////PHOTO GALLERY FUNCTION END///////////////////////