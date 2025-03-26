document.addEventListener('DOMContentLoaded', function() {
    const gallery = document.querySelector('.gallery');
    const preview = document.querySelector('.preview');
    const previewContent = document.querySelector('.preview-content');
    const closePreview = document.querySelector('.close-preview');

    // Exemple d'images et de contenu
    const images = [
        { src: 'images/art/carton/1.jpg', content: '<h2>Départ</h2><p>Description de l\'image 2.</p>' },
        // Ajoutez autant d'images que nécessaire
    ];

    images.forEach((img, index) => {
        const item = document.createElement('div');
        item.classList.add('gallery-item');
        item.style.backgroundImage = `url(${img.src})`;
        item.dataset.content = img.content;
        gallery.appendChild(item);

        item.addEventListener('click', function() {
            previewContent.innerHTML = this.dataset.content;
            preview.style.display = 'flex';
        });
    });

    closePreview.addEventListener('click', function() {
        preview.style.display = 'none';
    });
});