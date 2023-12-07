//////// SEARCH BAR BEGINNING//////////////////////
document.addEventListener('DOMContentLoaded', function () {
    var searchIconButton = document.getElementById('searchIconbutton');
    var searchBar = document.getElementById('searchBar');
    var searchButton = document.querySelector('.search-bar-button');
    var overlay = document.querySelector('.search-overlay');
    var searchResults = document.getElementById('search-results');
    var suggestionsContainer = document.getElementById('search-suggestions');
    var contentIndex = [];

    // Fetch the content index for search
    fetch('contentIndex.json')
        .then(response => response.json())
        .then(data => {
            contentIndex = data;
        })
        .catch(error => console.error('Error loading JSON:', error));

    // Function to position the search results
    function positionSearchResults() {
        var searchButtonRect = document.getElementById('searchIconbutton').getBoundingClientRect();
        var verticalOffset = -140.6; // Adjust this value for vertical spacing

        // Use window.innerWidth to determine the current width of the viewport
        if (window.innerWidth < 768) { // Example breakpoint, adjust as needed
            // For smaller screens, adjust the positioning logic as required
            searchResults.style.top = (searchButtonRect.bottom + (-110.6)) + 'px';
            searchResults.style.left = (searchButtonRect.left - searchResults.offsetWidth + searchButtonRect.width) + 'px'; // Example adjustment, align to the left with some padding
            searchResults.style.width = '22rem'; // Example adjustment, full width minus some padding
        } else {
            // For larger screens, keep the original positioning logic
            searchResults.style.top = (searchButtonRect.bottom + verticalOffset) + 'px';
            searchResults.style.left = (searchButtonRect.left - searchResults.offsetWidth + searchButtonRect.width) + 'px';
            searchResults.style.width = '22rem'; // Original width
        }
    }

    // Function to position the suggestions
    function positionSuggestions() {
        var searchButtonRect = document.getElementById('searchIconbutton').getBoundingClientRect();
        var verticalOffset = -140.6; // Adjust this value for vertical spacing

        // Use window.innerWidth to determine the current width of the viewport
        if (window.innerWidth < 768) { // Example breakpoint, adjust as needed
            // For smaller screens, adjust the positioning logic as required
            suggestionsContainer.style.top = (searchButtonRect.bottom + (-110.6)) + 'px';
            suggestionsContainer.style.left = (searchButtonRect.left + searchButtonRect.width) + 'px';
            suggestionsContainer.style.width = '22rem';
        } else {
            // For larger screens, keep the original positioning logic
            suggestionsContainer.style.top = (searchButtonRect.bottom + verticalOffset) + 'px';
            suggestionsContainer.style.left = (searchButtonRect.left + searchButtonRect.width) + 'px';
            suggestionsContainer.style.width = '22rem';
        }
    }

    // Event listener for search icon button click
    searchIconButton.addEventListener('click', function () {
        var isSearchBarVisible = searchBar.style.display === 'block';

        // Toggle search bar, button, and overlay
        searchBar.style.display = isSearchBarVisible ? 'none' : 'block';
        searchButton.style.display = isSearchBarVisible ? 'none' : 'block';
        overlay.style.display = isSearchBarVisible ? 'none' : 'block';

        // Toggle search icon visibility
        searchIconButton.style.visibility = isSearchBarVisible ? 'visible' : 'hidden';

        if (!isSearchBarVisible) {
            positionSearchResults(); // Position results when showing them
        }
    });

    overlay.addEventListener('click', function () {
        // Hide the search bar, button, and overlay
        searchBar.style.display = 'none';
        searchButton.style.display = 'none';
        overlay.style.display = 'none';

        // Clear the search input
        searchBar.value = '';

        // Show the search icon
        searchIconButton.style.visibility = 'visible';

        // Hide suggestions and search results
        suggestionsContainer.style.display = 'none';
        searchResults.style.display = 'none';
    });



    // Event listener for search bar input for suggestions
    searchBar.addEventListener('input', function () {
        var inputValue = searchBar.value.toLowerCase();
        var suggestions = contentIndex.filter(item => item.title.toLowerCase().includes(inputValue));

        displaySuggestions(suggestions);
        positionSuggestions();
    });

    // Event listener for window resize
    window.addEventListener('resize', function () {
        positionSearchResults();
        positionSuggestions();
    });

    // Function to perform the search
    function performSearch(contentIndex) {
        var query = document.getElementById('searchBar').value.toLowerCase();

        var results = contentIndex.filter(item =>
            item.title.toLowerCase().includes(query) ||
            item.keywords && item.keywords.toLowerCase().includes(query) ||
            item.description && item.description.toLowerCase().includes(query)
        );

        displayResults(results);
    }


    // Function to display search results
    function displayResults(results) {
        var resultsContainer = document.getElementById('search-results');
        resultsContainer.innerHTML = '';

        results.forEach(result => {
            // Create the main clickable div
            var resultDiv = document.createElement('div');
            resultDiv.className = 'search-result-item';

            // Create an anchor tag that covers the whole item
            var link = document.createElement('a');
            link.href = result.url;
            link.className = 'search-result-link';

            // Append title and description inside the anchor tag
            var title = document.createElement('h4');
            title.textContent = result.title;

            var description = document.createElement('p');
            description.textContent = result.description;
            description.className = 'search-result-description';

            link.appendChild(title);
            link.appendChild(description);

            // Append the anchor tag to the main div
            resultDiv.appendChild(link);

            resultsContainer.appendChild(resultDiv);
        });

        resultsContainer.style.display = 'block';
    }


    // Function to display suggestions
    function displaySuggestions(suggestions) {
        suggestionsContainer.innerHTML = '';
        if (suggestions.length > 0 && searchBar.value !== '') {
            suggestionsContainer.style.display = 'block';
            suggestions.forEach(suggestion => {
                var div = document.createElement('div');
                div.textContent = suggestion.title;
                div.onclick = function () {
                    searchBar.value = suggestion.title;
                    suggestionsContainer.style.display = 'none';
                    // Optionally, perform the search here
                };
                suggestionsContainer.appendChild(div);
            });
        } else {
            suggestionsContainer.style.display = 'none';
        }
    }

    // Modify searchBar event listener
    searchBar.addEventListener('input', function () {
        var inputValue = searchBar.value.toLowerCase();
        var filteredSuggestions = contentIndex.filter(item =>
            item.title.toLowerCase().includes(inputValue) ||
            (item.keywords && item.keywords.toLowerCase().includes(inputValue))
        );

        displaySuggestions(filteredSuggestions);
    });


    // Attach search functionality to the search button
    document.querySelector('.search-bar-button').addEventListener('click', function () {
        performSearch(contentIndex);
    });
});
//////// SEARCH BAR END//////////////////////