document.addEventListener("DOMContentLoaded", function () {
    const openModalButtons = document.querySelectorAll(".openModal");
    const modal = document.querySelector(".modal");
    const closeModalButtons = document.querySelectorAll(".closeModal");
    const form = document.getElementById("solicitarRecursos");
    const requireButton = document.getElementById("requireButton");

    function openModal() {
        modal.style.display = "block";
    }

    function closeModal() {
        modal.style.display = "none";
    }

    // Ajoutez des écouteurs d'événements à chaque bouton correspondant
    openModalButtons.forEach(function(button) {
        button.addEventListener("click", openModal);
    });

    closeModalButtons.forEach(function(button) {
        button.addEventListener("click", closeModal);
    });
});