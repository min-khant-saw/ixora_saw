const searchContainer = document.querySelector(".search-container");
const searchIcon = document.querySelector(".search");
const icons = document.querySelectorAll(".items");
const searchClose = document.querySelector(".close-search");
const navMobile = document.querySelector(".nav-mobile");
const hamburger = document.querySelector(".hamburger");
const ipadNavIcon = document.querySelector(".ipad-nav-icon");
searchIcon.addEventListener("click", () => {
    icons.forEach((e) => {
        e.classList.add("opacity-0");
        e.style.visibility = "hidden";
    });
    ipadNavIcon.style.visibility = "hidden";
    ipadNavIcon.style.opacity = "0";
    searchContainer.style.visibility = "visible";
    searchContainer.style.opacity = "1";
});

searchClose.addEventListener("click", () => {
    icons.forEach((e) => {
        e.classList.add("opacity-100");
        e.style.visibility = "visible";
    });
    ipadNavIcon.style.visibility = "visible";
    ipadNavIcon.style.opacity = "1";
    searchContainer.style.opacity = "0";
    searchContainer.style.visibility = "hidden";
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
