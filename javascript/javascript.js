let isNotZoomedIn = true;

function toggleZoom() {
    const img = document.getElementById('zoomIntoImg');
    if (isNotZoomedIn) {
        img.style.transform = 'scale(1.5)';
        img.style.transition = 'transform 0.5s ease';
        isNotZoomedIn = false;
    } else {
        img.style.transform = 'scale(1)';
        img.style.transition = 'transform 0.5s ease';
        isNotZoomedIn = true;
    }
}
