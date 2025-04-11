const leftImgs = document.querySelectorAll(".column.left .slideshow-img");
const rightImgs = document.querySelectorAll(".column.right .slideshow-img");

let leftIndex = 0;
let rightIndex = 0;

function showImage(images, index) {
  images.forEach((img, i) => {
    img.classList.toggle("active", i === index);
  });
}

function startAlternatingSlides() {
  showImage(leftImgs, leftIndex);
  showImage(rightImgs, rightIndex);

  setInterval(() => {
    leftIndex = (leftIndex + 1) % leftImgs.length;
    showImage(leftImgs, leftIndex);
  }, 6000);

  setTimeout(() => {
    setInterval(() => {
      rightIndex = (rightIndex + 1) % rightImgs.length;
      showImage(rightImgs, rightIndex);
    }, 6000);
  }, 3000); // Décalage entre les deux colonnes
}

// Lancer après le chargement
window.addEventListener("DOMContentLoaded", startAlternatingSlides);

