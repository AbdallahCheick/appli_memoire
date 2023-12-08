document.addEventListener("DOMContentLoaded", function () {
    const openModalButton = document.getElementById("openModal");
    const modal = document.querySelector(".modal");
    const closeModalButton = document.getElementById("closeModal");
    const form = document.getElementById("solicitarRecursos");
    const requireButton = document.getElementById("requireButton");

    function openModal() {
        modal.style.display = "block";
    }

    function closeModal() {
        modal.style.display = "none";
    }


    openModalButton.addEventListener("click", openModal);
    closeModalButton.addEventListener("click", closeModal);
    requireButton.addEventListener("click", validateAndSubmit);
});