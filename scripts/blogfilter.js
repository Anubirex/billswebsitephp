

document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-button');
    const articlesContainer = document.getElementById('all-articles');
    const articles = articlesContainer.querySelectorAll('.blog-card');
    const searchInput = document.getElementById('search-input');
    const sortSelect = document.getElementById('sort-select');
    const backToTopButton = document.getElementById('back-to-top');

    function filterArticles() {
        const selectedCategories = Array.from(filterButtons)
            .filter(button => button.classList.contains('active'))
            .map(button => button.getAttribute('data-category'));

        const searchTerm = searchInput.value.toLowerCase();

        articles.forEach(article => {
            const articleCategories = article.getAttribute('data-category').split(',');
            const articleTitle = article.querySelector('.card-content h2').textContent.toLowerCase();
            const articleDescription = article.querySelector('.card-content p').textContent.toLowerCase();

            const matchesCategory = articleCategories.some(category => selectedCategories.includes(category));
            const matchesSearch = articleTitle.includes(searchTerm) || articleDescription.includes(searchTerm);

            if (matchesCategory && matchesSearch) {
                article.style.display = 'block';
            } else {
                article.style.display = 'none';
            }
        });
    }

    function sortArticles() {
        const sortBy = sortSelect.value;
        const articlesArray = Array.from(articlesContainer.children);

        articlesArray.sort((a, b) => {
            if (sortBy === 'title') {
                return a.querySelector('.card-content h2').textContent.localeCompare(b.querySelector('.card-content h2').textContent);
            } else if (sortBy === 'date') {
                const dateA = new Date(a.getAttribute('data-date'));
                const dateB = new Date(b.getAttribute('data-date'));
                return dateB - dateA; // Newest first
            } else {
                return 0; // Default order
            }
        });

        // Append sorted articles back to the container
        articlesArray.forEach(article => articlesContainer.appendChild(article));
    }

    // Filter Buttons Event
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            button.classList.toggle('active');
            filterArticles();
        });
    });

    // Search Input Event
    searchInput.addEventListener('input', filterArticles);

    // Sort Select Event
    sortSelect.addEventListener('change', function() {
        sortArticles();
        filterArticles();
    });

    // Back to Top Button
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    });

    backToTopButton.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Initial filtering and sorting on page load
    sortArticles();
    filterArticles();
});
