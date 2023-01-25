<link rel="stylesheet" href="../assets/styles/pages/guest_homepage.css"/>
<header>
    <nav>
        <div class="nav__logo">
            <img src="../assets/icons/logo.ico" alt="Logo de C-Heart">
        </div>

        <div class="nav__title">
            <h1 id="CHeart">Child-Hearst</h1>
        </div>

        <div class="nav__inscription">
            <a id="inscription" href="./pages/inscription.php">Inscription</a>
            <a id="ImgCo" href="./pages/connexion.php"> <img src="../assets/icons/profil.ico" alt="Icône de profil"></a>
        </div>
    </nav>
</header>

<main id="guest_homepage">
    <article id="carousel">
        <?php include("components/text_carousel.php"); ?>
    </article>

    <article id="decoration">
        <div class="decoration__container">
            <img src="../assets/images/backgrounds/mains_croisees.jpg" alt="Image de mains croisées" width="400px">
        </div>
    </article>
</main>
<div class="vide">
</div>
<?php include("components/footer.php"); ?>
