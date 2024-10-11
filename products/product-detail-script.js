// product-detail-script.js

document.addEventListener('DOMContentLoaded', function() {
    // Adjust the meter colors based on value
    function adjustMeterColor(meterElement, value) {
        let color;
        if (value >= 96) {
            color = '#006400'; // Deep Green
        } else if (value >= 90) {
            color = '#90EE90'; // Light Green
        } else if (value >= 76) {
            color = '#FFFF00'; // Yellow
        } else if (value >= 50) {
            color = '#FF0000'; // Red
        } else {
            color = '#FF0000'; // Red
        }
        meterElement.style.backgroundColor = color;
    }

    // Efficiency Meter
    const efficiencyMeter = document.getElementById('efficiency-meter');
    adjustMeterColor(efficiencyMeter, 96); // Adjust the value accordingly

    // Comfort Level Meter
    const comfortMeter = document.getElementById('comfort-meter');
    adjustMeterColor(comfortMeter, 90); // Adjust the value accordingly

    // FAQ Section
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach((question) => {
        question.addEventListener('click', function() {
            // Close all other answers
            faqQuestions.forEach((q) => {
                if (q !== question) {
                    q.classList.remove('active');
                    q.nextElementSibling.style.display = 'none';
                }
            });

            // Toggle the current answer
            const answer = question.nextElementSibling;
            if (question.classList.contains('active')) {
                question.classList.remove('active');
                answer.style.display = 'none';
            } else {
                question.classList.add('active');
                answer.style.display = 'block';
            }
        });
    });
});
