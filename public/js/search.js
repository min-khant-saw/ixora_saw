const searchContainer = document.querySelector(".search-container");
const searchIcon = document.querySelector(".search");
const icons = document.querySelectorAll(".items");
const searchClose = document.querySelector(".close-search");

searchIcon.addEventListener("click", () => {
    icons.forEach((e) => {
        e.classList.add("opacity-0");
        e.style.visibility = "hidden";
    });
    searchContainer.style.visibility = "visible";
    searchContainer.style.opacity = "1";
});

searchClose.addEventListener("click", () => {
    icons.forEach((e) => {
        e.classList.add("opacity-100");
        e.style.visibility = "visible";
    });
    searchContainer.style.opacity = "0";
    searchContainer.style.visibility = "hidden";
});
