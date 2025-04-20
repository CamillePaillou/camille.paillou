document.addEventListener("DOMContentLoaded", function() {
    emailjs.init("KaOBj1ci0xcG-JCN2"); // Initialisation d'EmailJS avec la clé publique

    let contactForm = document.getElementById('frmContact');
    let fields = document.querySelectorAll('input[required], textarea[required]');

    // Ajout d'événements de réinitialisation des erreurs lors du focus ou du blur
    fields.forEach((field) => {
        field.addEventListener('focus', () => resetField(field), false);
        field.addEventListener('blur', () => validateField(field), false);
    });

    contactForm.addEventListener('submit', (e) => {
        e.preventDefault(); // Empêche la soumission par défaut

        let valid = true;

        // Réinitialiser toutes les erreurs avant de valider
        fields.forEach((field) => resetField(field));

        // Valider chaque champ
        fields.forEach((field) => {
            if (!validateField(field)) {
                valid = false;
            }
        });

        // Si tous les champs sont valides, envoyer l'email
        if (valid) {
            sendMail(e); // Appel de la fonction sendMail si les champs sont valides
        } else {
            alert("Veuillez remplir tous les champs correctement.");
        }
    });

    // Fonction de validation des champs
    function validateField(field) {
        if (field.checkValidity()) {
            return true;
        } else {
            field.classList.add('invalid');
            let message = field.title ? field.title : field.validationMessage;
            field.insertAdjacentHTML('afterend', `<span class="msg">${message}</span>`);
            return false;
        }
    }

    // Réinitialisation des erreurs pour un champ donné
    function resetField(field) {
        field.classList.remove('invalid');
        if (field.nextElementSibling && field.nextElementSibling.classList.contains('msg')) {
            field.nextElementSibling.remove();
        }
    }

    // Fonction pour envoyer l'email via EmailJS
    function sendMail(event) {
        var parms = {
            name: document.getElementById("name").value,
            email: document.getElementById("email").value,
            subject: document.getElementById("subject").value,
            message: document.getElementById("message").value,
        };

        emailjs.send("service_behnlt5", "template_8nqveka", parms)
            .then(function(response) {
                alert("Email envoyé avec succès !");
                window.location.href = "merci.php"; // Redirige vers une page de remerciement après succès
            }, function(error) {
                alert("Échec de l'envoi de l'email, veuillez réessayer.");
            });
    }
});