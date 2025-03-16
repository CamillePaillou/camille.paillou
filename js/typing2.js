function typeEffect(elementId, text, speed) {
    let index = 0;
    let element = document.getElementById(elementId);
    element.textContent = ""; // Réinitialise avant d'écrire

    function typing() {
        if (index < text.length) {
            element.textContent += text[index];
            index++;
            setTimeout(typing, speed);
        }
    }

    typing();
}

document.addEventListener("DOMContentLoaded", function () {
    typeEffect("title2", "DEVELOPPEMENT WEB", 100);
});

