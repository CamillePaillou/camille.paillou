document.addEventListener('DOMContentLoaded', function () {
    const galleryItems = document.querySelectorAll('.gallery-item');
    const preview = document.querySelector('.preview');
    const previewImage = document.querySelector('.preview-image');
    const previewTitle = document.querySelector('.preview-title');
    const previewDescription = document.querySelector('.preview-description');
    const closePreview = document.querySelector('.close-preview');

    // Vérifier que GSAP est bien chargé
    if (typeof gsap === "undefined") {
        console.error("GSAP n'est pas chargé !");
        return;
    }

    // Appliquer un léger décalage aléatoire
    galleryItems.forEach(item => {
        let randomOffsetX = (Math.random() - 0.5) * 20; // Entre -10px et 10px
        let randomOffsetY = (Math.random() - 0.5) * 20;
        item.style.transform = `translate(${randomOffsetX}px, ${randomOffsetY}px)`;
    });

    // Effet 3D au survol
    galleryItems.forEach(item => {
        item.addEventListener("mousemove", function (event) {
            let rect = this.getBoundingClientRect();
            let x = (event.clientX - rect.left) / rect.width - 0.5;
            let y = (event.clientY - rect.top) / rect.height - 0.5;
    
            gsap.to(this, {
                rotationY: x * 20,
                rotationX: -y * 20,
                scale: 1.1,
                ease: "power2.out",
                duration: 0.3
            });
        });
    
        item.addEventListener("mouseleave", function () {
            gsap.to(this, {
                rotationY: 0,
                rotationX: 0,
                scale: 1,
                ease: "power2.out",
                duration: 0.5
            });
        });
    });


    // SCROLL HORIZONTAL
    const gallery = document.querySelector('.gallery');
    gallery.addEventListener('wheel', (event) => {
        event.preventDefault();
        gallery.scrollLeft += event.deltaY * 2; // Augmenter ou diminuer la vitesse du scroll
    });

    // Effet magnétique
    galleryItems.forEach(item => {
        item.addEventListener('mousemove', function (event) {
            let rect = this.getBoundingClientRect();
            let x = event.clientX - rect.left - rect.width / 2;
            let y = event.clientY - rect.top - rect.height / 2;

            this.style.transform = `translate(${x / 20}px, ${y / 20}px)`;
        });

        item.addEventListener('mouseleave', function () {
            this.style.transform = '';
        });
    });
});
