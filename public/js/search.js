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
