<?php

/**
 * Gabarit searchform.php 
 * Permet d'afficher un formulaire de recherche
 */
?>
<form class="recherche" action="<?php echo esc_url(home_url('/')); ?>">
    <input
        class="recherche__input"
        type="search"
        name="s"
        id="recherche"
        placeholder="Recherche..."
        value="<?php echo get_search_query(); ?>"
        role="searchbox"
        aria-label="barre de recherche" />
    <button
        class="recherche__bouton"
        title="Rechercher sur le site"
        type="submit">
        <img
            src="https://s2.svgbox.net/hero-solid.svg?ic=search&color=000"
            width="32"
            height="32"
            alt="icone de loupe" />
    </button>
</form>