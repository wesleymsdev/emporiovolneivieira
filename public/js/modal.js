const btnModal = document.querySelector(".new");
const btnCloseModal = document.getElementById("close");

btnModal.addEventListener("click", (e) => {
    const modal = document.querySelector("#modal");
    modal.classList.add("modal");
});

btnCloseModal.addEventListener("click", (e) => {
    const modal = document.querySelector("#modal");
    modal.classList.remove("modal");
});
