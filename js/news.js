document.querySelectorAll(".timeline-art .event").forEach(event => {
    event.addEventListener("mouseover", function () {
        this.classList.add("hovered");
    });

    event.addEventListener("mouseout", function () {
        this.classList.remove("hovered");
    });

    event.querySelector(".content-inner").addEventListener("click", function () {
        let radio = this.closest(".event").querySelector("input[type='radio']");
        if (radio) {
            radio.checked = true;
            document.querySelectorAll(".timeline-art .event").forEach(evt => {
                evt.classList.remove("active");
            });
            this.closest(".event").classList.add("active");
        }
    });
});
