document.addEventListener('DOMContentLoaded', function() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    const preview = document.querySelector('.preview');
    const previewImage = document.querySelector('.preview-image');
    const previewTitle = document.querySelector('.preview-title');
    const previewDescription = document.querySelector('.preview-description');
    const closePreview = document.querySelector('.close-preview');

    galleryItems.forEach(item => {
        item.addEventListener('click', function() {
            const title = this.dataset.title;
            const content = this.dataset.content;
            const imageUrl = this.querySelector('.gallery-item-img').style.backgroundImage;
            
            if (imageUrl) {
                previewImage.src = imageUrl.replace('url("', '').replace('")', '');
            }

            previewTitle.textContent = title;
            previewDescription.textContent = content;
            preview.style.display = 'flex'; // Ouvre le preview
        });
    });

    closePreview.addEventListener('click', function() {
        preview.style.display = 'none'; // Ferme le preview
    });

    // Fermer le preview en cliquant en dehors
    preview.addEventListener('click', function(event) {
        if (event.target === preview) {
            preview.style.display = 'none';
        }
    });

    closePreview.addEventListener('click', function() {
        preview.classList.remove('show'); // Animation de disparition
    });

    document.addEventListener("DOMContentLoaded", function () {
        const galleryItems = document.querySelectorAll(".gallery-item");
    
        galleryItems.forEach(item => {
            let x = Math.random() * (window.innerWidth - 120); // Largeur - marge
            let y = Math.random() * (window.innerHeight - 120); // Hauteur - marge
    
            item.style.transform = `translate(${x}px, ${y}px)`;
        });
    });
    

    // Effet magnétique
    galleryItems.forEach(item => {
        item.addEventListener('mousemove', function(event) {
            let rect = this.getBoundingClientRect();
            let x = event.clientX - rect.left - rect.width / 2;
            let y = event.clientY - rect.top - rect.height / 2;

            this.style.transform = `rotateY(${x / 20}deg) rotateX(${-y / 20}deg)`;
        });

        item.addEventListener('mouseleave', function() {
            this.style.transform = 'rotateY(0deg) rotateX(0deg)';
        });
    });
});