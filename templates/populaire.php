    <div class="conteneur global">
        <?php if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>
        <?php
                // Cette fonction renvoie true si l’article en cours appartient à la catégorie spécifiée, ou à l’une de ses sous-catégories.
                if (in_category('galerie')) {
                    get_template_part("templates/galerie");
                } else {
                    get_template_part("templates/carte");
                }
            }
        } ?>
    </div>