function loadVideo(element, url) {
    var iframe = document.createElement('iframe');
    iframe.setAttribute('src', url);
    iframe.setAttribute('frameborder', '0');
    iframe.setAttribute('allowfullscreen', 'true');
    iframe.setAttribute('width', '560');  // Set appropriate width
    iframe.setAttribute('height', '315'); // Set appropriate height

    // Replace the placeholder with the iframe
    element.innerHTML = '';
    element.appendChild(iframe);
}
