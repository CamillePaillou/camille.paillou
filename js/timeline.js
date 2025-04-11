document.addEventListener("DOMContentLoaded", function () {
    const timelineItems = document.querySelectorAll('.timeline-item');
    const heroes = document.querySelectorAll('.hero');

    function selectItem(clickedItem) {
        // Supprimer les classes actives
        timelineItems.forEach(item => item.classList.remove('active'));
        heroes.forEach(hero => hero.classList.remove('active'));

        // Ajouter la classe active à l'élément cliqué
        clickedItem.classList.add('active');

        // Trouver l'index
        const index = Array.from(timelineItems).indexOf(clickedItem);
        if (index !== -1) {
            heroes[index].classList.add('active');
        }
    }

    // Clic sur chaque élément de la timeline
    timelineItems.forEach(item => {
        item.addEventListener('click', function () {
            selectItem(this);
        });
    });

    // Activer le premier par défaut
    if (timelineItems.length > 0) {
        selectItem(timelineItems[0]);
    }
});
