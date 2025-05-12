<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prototype de la page d'accueil</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="normalize.css" />
</head>

<body>
    <header class="entete">
        <div class="entete__contenu">
            <img src="images/logo.png" alt="" class="entete__logo" />
            <label for="menu" class="entete__burger">
                <img
                    src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000"
                    width="32"
                    height="32" />
            </label>
            <input type="checkbox" class="menu" id="menu" />
            <nav class="entete__nav">
                <ul class="entete__menu">
                    <li class="entete__menu-item"><a href="#">Sport</a></li>
                    <li class="entete__menu-item"><a href="#">Pleine nature</a></li>
                    <li class="entete__menu-item"><a href="#">Aventure</a></li>
                    <li class="entete__menu-item"><a href="#">culturel</a></li>
                    <li class="entete__menu-item"><a href="#">Repos</a></li>
                    <li class="entete__menu-item"><a href="#">Zen</a></li>
                    <li class="entete__menu-item"><a href="#">Économique</a></li>
                    <li class="entete__menu-item"><a href="#">Favorite</a></li>
                    <li class="entete__menu-item"><a href="#">Pays</a></li>
                </ul>

                <form class="recherche" action="#">
                    <input
                        class="recherche__input"
                        type="search"
                        name="recherche"
                        id="recherche"
                        placeholder="Recherche..." />
                    <button class="recherche__bouton">
                        <img
                            src="https://s2.svgbox.net/hero-solid.svg?ic=search&color=000"
                            width="32"
                            height="32" />
                    </button>
                </form>
            </nav>
        </div>
    </header>
    <section class="hero">
        <div class="hero__contenu">
            <h1 class="hero__titre">Voyagez Autrement avec Club Voyage !</h1>
            <p class="hero__description">
                Découvrez des destinations uniques et inoubliables avec Club Voyage.
                Nous vous offrons des expériences authentiques, des paysages à couper
                le souffle et des aventures sur mesure. Partez à la découverte du
                monde avec nous et créez des souvenirs impérissables.
            </p>
            <p class="hero__description">info@cmaisonneuve.qc.ca</p>
            <p class="hero__description">3800, rue Sherbrooke, Montréal</p>
            <p class="hero__description">514-254-7131</p>
            <a href="#" class="bouton">S'inscrire</a>
            <div>
                <a href="#"><img
                        class="hero__medias-sociaux"
                        src="images/icone-facebook.png"
                        alt="icone-facebook" /></a>
                <a href="#"><img
                        class="hero__medias-sociaux"
                        src="images/icone-instagram.png"
                        alt="icone-instagram" /></a>
            </div>
        </div>
    </section>
    <section class="formulaire">
        <form class="formulaire__contenu" action="#">
            <div class="formulaire__champs">
                <label for="lastname">Nom</label>
                <input
                    type="text"
                    name="lastname"
                    id="lastname"
                    placeholder="Écrivez votre nom" />
            </div>
            <div class="formulaire__champs">
                <label for="firstname">Prénom</label>
                <input
                    type="text"
                    name="firstname"
                    id="firstname"
                    placeholder="Écrivez votre prénom" />
            </div>
            <div class="formulaire__champs">
                <label for="email">Courriel</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Écrivez votre courriel" />
            </div>
            <div class="formulaire__champs">
                <label for="tel">Téléphone</label>
                <input
                    type="tel"
                    name="tel"
                    id="tel"
                    placeholder="Écrivez votre téléphone" />
            </div>
            <input type="submit" value="S'inscrire" />
        </form>
    </section>
    <section class="galerie">
        <h2>Nos destinations favorites</h2>
        <div class="galerie__grille">
            <a href="#"><img src="images/acores.webp" alt="acores" /></a>
            <a href="#"><img src="images/maldives.webp" alt="maldives" /></a>
            <a href="#"><img src="images/belize.webp" alt="belize" /></a>
            <a href="#"><img src="images/seychelles.webp" alt="seychelles" /></a>
            <a href="#"><img src="images/bora_bora.webp" alt="bora bora" /></a>
            <a href=""><img src="images/whitsundays.webp" alt="whitsundays" /></a>
            <a href="#"><img src="images/costa_rica.webp" alt="costarica" /></a>
            <a href="#"><img src="images/phi_phi.webp" alt="phi phi" /></a>
            <a href="#"><img src="images/maurice.webp" alt="maurice" /></a>
            <a href="#"><img src="images/zanzibar.webp" alt="zanzibar" /></a>
        </div>
    </section>
    <footer class="piedpage">© copyright Club de Voyage 2025</footer>
</body>
<script src="script/checkbox.js"></script>

</html>