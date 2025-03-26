function selectItem(element) {
    let items = document.querySelectorAll(".timeline-item");
    let icon = document.getElementById("timeline-icon");

    let index = Array.from(items).indexOf(element);
    if (index !== -1) {
        let selectedItem = items[index];

        let itemRect = selectedItem.getBoundingClientRect();
        let timelineRect = document.querySelector(".timeline").getBoundingClientRect();
        
        let iconLeft = itemRect.left - timelineRect.left + itemRect.width / 2;

        // Appliquer animation
        icon.style.left = `${iconLeft}px`;
        icon.classList.add("move-animation");
    }
}

// Sélectionner le premier élément l'image 1 par défaut au chargement
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


