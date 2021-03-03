/** Start action menu mobile */
const btnOpen = document.querySelector("#btn-menu");
const btnProduct = document.querySelector("#btnProduct");
const clickOverlay = document.querySelector("#overlay");

btnOpen.addEventListener("click", (e) => {
    const header = document.querySelector("#overlay");
    header.classList.toggle("open");
});

btnProduct.addEventListener("click", (e) => {
    const header = document.querySelector("#overlay");
    header.classList.toggle("open");
});
/** End action menu mobile */

clickOverlay.addEventListener("click", (e) => {
    const header = document.querySelector("#overlay");
    header.classList.remove("open");
});
