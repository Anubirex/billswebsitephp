function openTab(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tabbuttons;

    // Get all elements with class="serv-tab-displayed" and hide them
    tabcontent = document.getElementsByClassName("serv-tab-displayed");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="services-tabs" and remove the class "active"
    tabbuttons = document.getElementsByClassName("services-tabs");
    for (i = 0; i < tabbuttons.length; i++) {
        tabbuttons[i].className = tabbuttons[i].className.replace(" active", "");
    }

    // Show the current tab content and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "flex";
    evt.currentTarget.className += " active";
}

// Optionally, auto open the first tab when the page loads
window.onload = function() {
    document.getElementsByClassName("services-tabs")[0].click();
};
