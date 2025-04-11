const accordions = document.querySelectorAll(".accordion");

  accordions.forEach(acc => {
    acc.addEventListener("click", function () {
      this.classList.toggle("active");
    });
  });
