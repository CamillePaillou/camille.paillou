let currentIndex = 0;
const images = document.querySelectorAll(".thumbnail");
const modal = document.getElementById("xModal");
const modalImg = document.getElementById("modalImg");

// Fonction pour ouvrir le modal
function openModal(index) {
    currentIndex = index;
    const selectedImage = images[currentIndex];
    
    // Afficher le modal
    modal.style.display = "flex";
    
    // Mettre à jour la source de l'image modale
    modalImg.src = selectedImage.src;

    // Réinitialiser les classes précédentes
    modalImg.classList.remove("modal-img-horiz", "modal-img-verti", "zoomed");

    // Détecter l'orientation de l'image
    const tempImg = new Image();
    tempImg.onload = () => {
        if (tempImg.width > tempImg.height) {
            modalImg.classList.add("modal-img-horiz");
        } else {
            modalImg.classList.add("modal-img-verti");
        }
    };
    tempImg.src = selectedImage.src;
}

// Fermer le modal
function closeModal() {
    modal.style.display = "none";
    modalImg.classList.remove("zoomed");
}

// Fermer en cliquant en dehors de l’image
function clickOutside(event) {
    if (event.target === modal) {
        closeModal();
    }
}

// Naviguer dans les images
function changeSlide(direction) {
    currentIndex += direction;
    if (currentIndex < 0) currentIndex = images.length - 1;
    if (currentIndex >= images.length) currentIndex = 0;
    openModal(currentIndex);
}

// Zoom dans le modal au clic
modalImg.addEventListener("click", function () {
    this.classList.toggle("zoomed");
});

// Navigation clavier
document.addEventListener("keydown", function (event) {
    if (modal.style.display === "flex") {
        if (event.key === "ArrowRight") changeSlide(1);
        if (event.key === "ArrowLeft") changeSlide(-1);
        if (event.key === "Escape") closeModal();
    }
});