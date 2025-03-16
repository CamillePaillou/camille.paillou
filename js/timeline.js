function selectItem(element) {
    // Supprime l'étoile des autres items
    document.querySelectorAll(".timeline-item .icon").forEach(icon => {
        icon.classList.remove("star");
        icon.classList.add("circle");
    });

    // Applique l'effet à l'élément sélectionné
    let icon = element.querySelector(".icon");
    icon.classList.remove("circle");
    icon.classList.add("star");
}

// Définir l'image 1 comme sélectionnée au chargement
document.addEventListener("DOMContentLoaded", function () {
    let firstItem = document.querySelector(".timeline-item");
    if (firstItem) {
        selectItem(firstItem);
    }
});

//function pour le changement d'image et titre 
function showImage(id) {
    // Masquer toutes les images
    document.querySelectorAll(".hero").forEach(hero => {
        hero.classList.remove("active");
    });

    // Afficher l'image correspondante
    let selectedHero = document.querySelector(`.hero[data-id="${id}"]`);
    if (selectedHero) {
        selectedHero.classList.add("active");
    }
}

// Activer l'image 1 par défaut
document.addEventListener("DOMContentLoaded", function () {
    showImage(1);
});

// Modifier la timeline pour changer d’image
document.querySelectorAll(".timeline-item").forEach((item, index) => {
    item.addEventListener("click", function () {
        showImage(index + 1); // Associer index à l’ID des images
        selectItem(this); // Met à jour l'étoile
    });
});

