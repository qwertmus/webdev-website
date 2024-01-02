/* contact me */

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



/* homepage */

let colors = ["#f8f8f8","#e0e0e0","#c8c8c8","#a8a8a8","#888888","#686868","#484848","#303030","#181818","#080808", /* white to black */
              "#181818","#303030","#484848","#686868","#888888","#a8a8a8","#c8c8c8","#e0e0e0","#f8f8f8"] /* back from black to white slowly */
let currentIndex = 0;
let colorfulBackground = document.getElementById("bgcChange");

function bgcChanging() {
  colorfulBackground.style.backgroundColor = colors[currentIndex];
  currentIndex = (currentIndex + 1) % colors.length; // increase index by 1 , changed everytime startcolorchange is active
}

function startColorChange() {
    bgcChanging(); 
  setInterval(bgcChanging, 2000); // every 3 sec a colour changes to main on homepage
}

document.addEventListener("DOMContentLoaded", startColorChange);




