document.addEventListener('DOMContentLoaded', function () {
    const galleryItems = document.querySelectorAll('.gallery-item');
    const preview = document.querySelector('.preview');
    const previewImage = document.querySelector('.preview-image');
    const previewTitle = document.querySelector('.preview-title');
    const previewDescription = document.querySelector('.preview-description');
    const closePreview = document.querySelector('.close-preview');

    // Appliquer un léger décalage aléatoire
    galleryItems.forEach(item => {
        let randomOffsetX = (Math.random() - 0.5) * 20; // Entre -10px et 10px
        let randomOffsetY = (Math.random() - 0.5) * 20;
        item.style.transform = `translate(${randomOffsetX}px, ${randomOffsetY}px)`;
    });

    // Gestion du preview
    galleryItems.forEach(item => {
        item.addEventListener('click', function () {
            const title = this.dataset.title;
            const content = this.dataset.content;
            const imageUrl = this.querySelector('.gallery-item-img').style.backgroundImage;
            
            if (imageUrl) {
                previewImage.src = imageUrl.replace('url("', '').replace('")', '');
            }

            previewTitle.textContent = title;
            previewDescription.textContent = content;
            preview.classList.add('show');
        });
    });

    closePreview.addEventListener('click', function () {
        preview.classList.remove('show');
    });

    preview.addEventListener('click', function (event) {
        if (event.target === preview) {
            preview.classList.remove('show');
        }
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
