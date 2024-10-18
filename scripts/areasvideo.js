function loadVideo(element, url) {
    var autoplayUrl = url + '&autoplay=1'; // Add autoplay parameter
    var iframe = document.createElement('iframe');
    iframe.setAttribute('src', autoplayUrl);
    iframe.setAttribute('frameborder', '0');
    iframe.setAttribute('allowfullscreen', 'true');
    iframe.setAttribute('width', '669'); // Set appropriate width
    iframe.setAttribute('height', '403'); // Set appropriate height

    // Replace the placeholder with the iframe
    element.innerHTML = '';
    element.appendChild(iframe);
}

