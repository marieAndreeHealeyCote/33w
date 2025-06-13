    <footer class="piedpage">
        <section class="piedpage__s1">
            <div class="piedpage__s1__liens">
                <h2>Liens sur le voyage</h2>
                <ul class="piedpage__s1__liens__liste">
                    <li>
                        <a class="piedpage__s1__liens__liste-items" href="https://www.airtransat.com/fr-CA" target="_blank">Air Transat</a>
                    </li>
                    <li>
                        <a class="piedpage__s1__liens__liste-items" href="https://www.aircanada.com" target="_blank">Air Canada</a>
                    </li>
                    <li>
                        <a class="piedpage__s1__liens__liste-items" href="https://www.expedia.ca" target="_blank">Expedia.ca</a>
                    </li>
                    <li>
                        <a class="piedpage__s1__liens__liste-items" href="https://www.tripadvisor.ca/" target="_blank">Tripadvisor</a>
                    </li>
                </ul>
            </div>
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    <h2>Adresse</h2>
                    <p>
                        3800, rue Sherbrooke, Montréal, Québec, Canada, H1X 2A2 <br />
                        514-254-7131
                    </p>
                    <form class="recherche" action="#">
                        <input
                            class="recherche__input"
                            type="search"
                            name="recherche"
                            id="recherche"
                            placeholder="Recherche..."
                            role="searchbox"
                            aria-label="barre de recherche" />
                        <button class="recherche__bouton" title="Rechercher sur le site">
                            <img
                                src="https://s2.svgbox.net/hero-solid.svg?ic=search&color=000"
                                width="32"
                                height="32"
                                alt="icone de loupe" />
                        </button>
                    </form>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <h2>Mission du Club de Voyage</h2>
                <p>
                    Notre mission est d'inspirer et d'informer nos voyageurs et
                    voyageuses sur des destinations de voyage qui répondent à leurs
                    attentes. Nous favorisons les échanges et le partage d'expériences à
                    travers des activités sociales variées, telles que des rencontres,
                    des conférences et des dîners.
                </p>
            </div>
        </section>
        <section class="piedpage__s2">
            <div class="piedpage__s2__medias-sociaux">
                <a href="https://www.facebook.com"><img
                        class="piedpage__s2__medias-sociaux-items"
                        src="http://localhost/iniationGestionnaireContenu/33w/wp-content/uploads/2025/05/icone-facebook-3.png"
                        alt="icone-facebook" /></a>
                <a href="https://www.instagram.com/"><img
                        class="piedpage__s2__medias-sociaux-items"
                        src="http://localhost/iniationGestionnaireContenu/33w/wp-content/uploads/2025/05/icone-instagram-2.png"
                        alt="icone-instagram" /></a>
            </div>
            <div class="piedpage__s2__externe">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    'container' => '',
                    'menu_class' => '',
                )); ?>
            </div>
        </section>
        <section class="piedpage__s3">
            <div>© Copyright Club de Voyage 2025</div>
        </section>
    </footer>
    <script src="scripts/checkbox.js"></script>
    <?php wp_footer() ?>
    </body>

    </html>