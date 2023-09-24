const searchContainer = document.querySelector(".search-bar");
const searchIcon = document.querySelector(".search");
const icons = document.querySelectorAll(".items");
const searchClose = document.querySelector(".close-search");
const navMobile = document.querySelector(".nav-mobile");
const hamburger = document.querySelector(".hamburger");
const ipadNavIcon = document.querySelector(".ipad-nav-icon");
searchIcon.addEventListener("click", () => {
    searchContainer.style.height = "50px";
});

searchClose.addEventListener("click", () => {
    // searchContainer.style.opacity = "0";
    searchContainer.style.height = "0px";
});

let isOpen = false;
hamburger.addEventListener("click", () => {
    if (isOpen) {
        navMobile.style.height = "0px";
        navMobile.style.opacity = "0";
        navMobile.style.visibility = "hidden";
        return (isOpen = false);
    }
    navMobile.style.height = "430px";
    navMobile.style.opacity = "1";
    navMobile.style.visibility = "visible";
    return (isOpen = true);
});

let imageContainer = document.getElementById("image-container");
let productImage = document.getElementById("product-image");
let overlay = document.getElementById("overlay");
let mouseOverlay = document.getElementById("mouse-overlay");

let events = {
    mouse: {
        move: "mousemove",
    },
    touch: {
        move: "touchmove",
    },
};

let deviceType = "";

function isTouchDevice() {
    try {
        deviceType = "touch";
        document.createEvent("TouchEvent");
        return true;
    } catch (e) {
        deviceType = "mouse";
        return false;
    }
}

isTouchDevice();

const hideElement = () => {
    overlay.style.display = "none";
    mouseOverlay.style.display = "none";
};

imageContainer.addEventListener(events[deviceType].move, (e) => {
    try {
        var x = !isTouchDevice() ? e.pageX : e.touches[0].pageX;
        var y = !isTouchDevice() ? e.pageY : e.touches[0].pageY;
    } catch (e) {}

    let imageWidth = imageContainer.offsetWidth;
    let imageHeight = imageContainer.offsetHeight;

    if (
        imageWidth - (x - imageContainer.offsetLeft) < 15 ||
        x - imageContainer.offsetLeft < 15 ||
        imageHeight - (y - imageContainer.offsetTop) < 15 ||
        y - imageContainer.offsetTop < 15
    ) {
        hideElement();
    } else {
        overlay.style.display = "block";
        mouseOverlay.style.display = "inline-block";
    }

    var posX = ((x - imageContainer.offsetLeft) / imageWidth).toFixed(4) * 100;
    var posY = ((y - imageContainer.offsetTop) / imageHeight).toFixed(4) * 100;

    overlay.style.backgroundPosition = posX + "%" + posY + "%";

    mouseOverlay.style.top = y + "px";
    mouseOverlay.style.left = x + "px";
    overlay.style.top = y + "px";
    if (window.screen.width > 1000) {
        overlay.style.left = x + "px";
    } else {
        overlay.style.left = x - 310 + "px";
    }
});
