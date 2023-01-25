<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>Inscription</title>
    <link rel="shortcut icon" href="../assets/icons/logo.ico">
    <link rel="stylesheet" href="../assets/styles/base.css">
    <link rel="stylesheet" href="../assets/styles/pages/inscription.css">
    <link rel="stylesheet" href="../assets/styles/pages/inscriptiontempo.css">
</head>
<body>
<header>
    <nav>
        <div class="nav__logo">
            <img href="../index.php" src="../assets/icons/logo.ico" alt="Logo de C-Heart">
        </div>

        <div class="nav__title">
            <h1 id="CHeart">Child-Heart</h1>
        </div>

        <div class="nav__inscription">
            <a href="../pages/connexion.php"> <img src="../assets/icons/profil.ico" alt="Icône de profil"></a>
        </div>
    </nav>
    <!--    --><?php //require('../header_footer/header1.php'); ?>
</header>
<main>
    <div class="grid">
        <div id="rectangle">
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == 'missing_data') {
                    echo '<p class="error_message">Vous devez remplir/accepter tous les champs</p>';
                } else if ($_GET['error'] == 'passwords_not_matching') {
                    echo '<p class="error_message">Les mots de passe ne correspondent pas</p>';
                } else if ($_GET['error'] == 'email_already_used') {
                    echo '<p class="error_message">Cet email est déjà utilisé</p>';
                } else if ($_GET['error'] == 'invalid_email') {
                    echo '<p class="error_message">Cet email n\'est pas valide</p>';
                } else if ($_GET['error'] == 'invalid_name') {
                    echo '<p class="error_message">Le nom n\'est pas valide</p>';
                } else if ($_GET['error'] == 'invalid_firstname') {
                    echo '<p class="error_message">Le prénom n\'est pas valide</p>';
                } else if ($_GET['error'] == 'invalid_phone') {
                    echo '<p class="error_message">Le numéro de téléphone n\'est pas valide</p>';
                }
            }
            ?>

            <h2>Inscrivez-vous</h2>
            <div class="grid-container">
                <form action="../controllers/register.php" method="POST">
                    <input type="text" name="surname" id="surname" placeholder="Nom"/>
                    <input type="text" name="firstname" id="firstname" placeholder="Prénom"/>
                    <input type="text" name="phone" id="phone" placeholder="Numéro de téléphone"/>
                    <input type="text" name="email" id="email" placeholder="Adresse mail"/>
                    <input type="password" name="password" id="password" placeholder="Mot de passe"/>
                    <input type="password" name="confirm_password" id="confirm_password"
                           placeholder="Confirmer mot de passe"/>
                    <div><input type="checkbox" name="accept_terms" value="yes"/><a href="../CGU/CGU.php">Accepter les Conditions Générales
                            d'Utilisation (CGU)</a></div>
                    <input type="submit" value="Valider"/>
                    <a href="../index.php"><input id="retour" value="Retour"/></a>
                </form>
            </div>
        </div>
    </div>
</main>
<div class="vide">
</div>
<footer>
    <?php include('../header_footer/footer1.php'); ?>
</footer>
</body>
</html>
