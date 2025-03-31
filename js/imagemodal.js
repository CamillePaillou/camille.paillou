let currentIndex = 0;
let images = document.querySelectorAll(".thumbnail");

// Ouvrir le modal
function openModal(index) {
    currentIndex = index;
    let modal = document.getElementById("xModal");
    let modalImg = document.getElementById("modalImg");

    modalImg.src = images[currentIndex].src;
    modal.style.display = "flex";
}

// Fermer le modal
function closeModal() {
    document.getElementById("xModal").style.display = "none";
}

// Fermer en cliquant hors de l’image
function clickOutside(event) {
    if (event.target.classList.contains("xModal")) {
        closeModal();
    }
}

// Changer d’image avec les boutons
function changeSlide(direction) {
    currentIndex += direction;
    if (currentIndex < 0) currentIndex = images.length - 1;
    if (currentIndex >= images.length) currentIndex = 0;

    document.getElementById("modalImg").src = images[currentIndex].src;
}

// Navigation avec les touches du clavier
document.addEventListener("keydown", function (event) {
    if (event.key === "ArrowRight") changeSlide(1);
    if (event.key === "ArrowLeft") changeSlide(-1);
    if (event.key === "Escape") closeModal();
});

// Zoom sur l’image
document.getElementById("modalImg").addEventListener("click", function () {
    this.classList.toggle("zoomed");
});
