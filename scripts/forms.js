document.addEventListener('DOMContentLoaded', () => {
        const headerFormOverlay = document.querySelector('.form-overlay');
        const bodyFormOverlay = document.querySelector('.body-form-overlay');
        const pageOverlay = document.querySelector('.page-overlay');
        const thankYouModal = document.querySelector('.modal');
        const closeThankYouModalButton = thankYouModal.querySelector('.close-button');
        const forms = document.querySelectorAll('.ajax-form');
        const headerToggleButtons = document.querySelectorAll('.mobile-service-button, .schedule-service-button');
        const bodyToggleButtons = document.querySelectorAll('.open-form-button');
        const cancelButtons = document.querySelectorAll('.btn.cancel');
    
        function loadAndRenderRecaptcha() {
            const recaptchaPlaceholders = document.querySelectorAll('.recaptcha-placeholder');
    
            recaptchaPlaceholders.forEach(placeholder => {
                if (placeholder.innerHTML === '') { // Check if not already rendered
                    grecaptcha.render(placeholder, {
                        'sitekey': '6Le4_zcpAAAAAIz9XVYpYKJ3yp6dYpG9jD0kyqM7'
                    });
                }
            });
        }
    
        function onRecaptchaLoad() {
            // This function is required for reCAPTCHA's onload callback
            loadAndRenderRecaptcha();
        }
    
        function loadRecaptchaScript() {
            if (!window.grecaptcha || !window.grecaptcha.render) {
                // Load the reCAPTCHA script
                var script = document.createElement('script');
                script.src = 'https://www.google.com/recaptcha/api.js?onload=onRecaptchaLoad&render=explicit';
                script.defer = true;
                script.defer = true;
                document.head.appendChild(script);
            } else {
                // If reCAPTCHA is already loaded, render it
                onRecaptchaLoad();
            }
        }
    
        function toggleDisplay(element, display = 'block') {
            const isVisible = element.style.display === display;
            element.style.display = isVisible ? 'none' : display;
            document.body.classList.toggle('no-scroll', !isVisible);
    
            // Load and render reCAPTCHA for the header form
            if (headerFormOverlay.style.display !== 'none') {
                loadAndRenderRecaptcha();
            }
        }
    
        function toggleHeaderFormDisplay() {
            toggleDisplay(headerFormOverlay, 'flex');
            toggleDisplay(pageOverlay);
            bodyFormOverlay.style.display = 'none'; // Ensure body form is closed
        }
    
        function toggleBodyFormDisplay() {
            const isBodyFormVisible = bodyFormOverlay.style.display === 'block';
            
            // Directly set the display of bodyFormOverlay
            bodyFormOverlay.style.display = isBodyFormVisible ? 'none' : 'block';
            
            // Set pageOverlay display based on bodyFormOverlay's visibility
            pageOverlay.style.display = isBodyFormVisible ? 'none' : 'block';
    
            // Ensure header form is closed if body form is being opened
            if (!isBodyFormVisible) {
                headerFormOverlay.style.display = 'none';
            }
    
            // Load and render reCAPTCHA for the body form
            if (bodyFormOverlay.style.display !== 'none') {
                loadAndRenderRecaptcha();
            }
        }
    
        headerToggleButtons.forEach(button => button.addEventListener('click', toggleHeaderFormDisplay));
        bodyToggleButtons.forEach(button => button.addEventListener('click', toggleBodyFormDisplay));
        cancelButtons.forEach(button => button.addEventListener('click', () => {
            headerFormOverlay.style.display = 'none';
            bodyFormOverlay.style.display = 'none';
            pageOverlay.style.display = 'none';
            document.body.classList.remove('no-scroll');
        }));
        pageOverlay.addEventListener('click', () => {
            headerFormOverlay.style.display = 'none';
            bodyFormOverlay.style.display = 'none';
            pageOverlay.style.display = 'none';
            document.body.classList.remove('no-scroll');
        });
    
        closeThankYouModalButton.addEventListener('click', () => {
            thankYouModal.style.display = 'none';
        });
    
        thankYouModal.addEventListener('click', (event) => {
            if (event.target === thankYouModal) {
                thankYouModal.style.display = 'none';
            }
        });
    
        forms.forEach(form => {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                var formData = new FormData(this);
    
                fetch('sendemail.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    headerFormOverlay.style.display = 'none';
                    bodyFormOverlay.style.display = 'none';
                    pageOverlay.style.display = 'none';
                    document.body.classList.remove('no-scroll');
                    thankYouModal.style.display = 'block'; // Show thank-you modal
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
        window.onRecaptchaLoad = onRecaptchaLoad;
    });