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