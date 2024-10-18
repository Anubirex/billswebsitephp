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
        

        menuContent.style.display = 'grid';
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

    menuContent.style.display = 'grid';
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
///////HEADER SCROLL LISTENER BEGIN//////////////////////////
window.addEventListener('scroll', function() {
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