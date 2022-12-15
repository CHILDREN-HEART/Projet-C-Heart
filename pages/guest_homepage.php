<link rel="stylesheet" href="../assets/styles/pages/guest_homepage.css" />
<header>
    <nav>
        <div class="nav__logo">
            <img src="../assets/icons/logo.ico" alt="Logo de C-Heart">
        </div>

        <div class="nav__title">
            <h1>Child-Heart</h1>
        </div>

        <div class="nav__inscription">
            <a href="./pages/inscription.php">Inscription</a>
            <img src="../assets/icons/profil.ico" alt="Icône de profil">
        </div>
    </nav>
</header>

<main id="guest_homepage">
    <article id="carousel">
        <?php require("components/text_carousel.php"); ?>
    </article>

    <article id="decoration">
        <div class="decoration__container">
            <img src="../assets/images/backgrounds/mains_croisees.jpg" alt="Image de mains croisées" width="400px">
        </div>
    </article>
</main>

<?php require("components/footer.php"); ?>
