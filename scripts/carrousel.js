/* scripts.carrousel.js */
(function () {
    const carrousels = document.querySelectorAll(".carrousel");
    const radios = document.querySelectorAll(".carrousel__radio");
    let caroussel_timer = null;

    radios.forEach((radio, index) => {
        radio.addEventListener("change", () => {
            //annuler le timeout si on interagit avec les radios entre temps
            clearTimeout(caroussel_timer);
            //retirer le .fade existant
            //puis l'ajouter à la slide correspondante à mon bouton radio
            carrousels.forEach((element) => element.classList.remove("fade"));
            carrousels[index].classList.add("fade");
            //ré-initialiser le timeout
            caroussel_timer = setTimeout(next_carrousel_slide, 5000);
        });
    });

    function initialize_carrousel() {
        radios[0].checked = true;
        carrousels[0].classList.add("fade");
        caroussel_timer = setTimeout(next_carrousel_slide, 5000);
        console.info("Initialisation du caroussel");
    }

    function next_carrousel_slide() {
        const longueur = carrousels.length;
        let prochainIndex = 0;

        carrousels.forEach((element, indexCourant) => {
            if (element.classList.contains('fade')) {
                prochainIndex = indexCourant + 1;
                if (prochainIndex >= longueur) {
                    prochainIndex = 0;
                }
            }
        });
        radios[prochainIndex].click();
    }

    initialize_carrousel();
})();