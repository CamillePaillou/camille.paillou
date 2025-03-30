document.addEventListener("DOMContentLoaded", function () {
    // Créer l'élément modal
    let modal = document.createElement("div");
    modal.id = "imageModal";
    modal.innerHTML = `
        <div class="modal-content">
            <span class="close">&times;</span>
            <img id="modalImg" src="" alt="Image en grand format">
        </div>
    `;
    document.body.appendChild(modal);

    // Sélectionner toutes les images et ajouter l'événement de clic
    document.querySelectorAll(".dev-image img, .art-verti img").forEach(img => {
        img.addEventListener("click", function () {
            document.getElementById("modalImg").src = this.src;
            modal.style.display = "flex";
        });
    });

    // Fermer le modal
    modal.querySelector(".close").addEventListener("click", function () {
        modal.style.display = "none";
    });

    // Fermer le modal en cliquant à l'extérieur de l'image
    modal.addEventListener("click", function (e) {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });

    // Ajouter un effet d'agrandissement au survol du modal
    let modalImg = document.getElementById("modalImg");
    modalImg.addEventListener("mouseover", function () {
        this.style.transform = "scale(1.1)";
    });

    modalImg.addEventListener("mouseout", function () {
        this.style.transform = "scale(1)";
    });
});
