<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mot de passe oublié</title>
    <link rel="shortcut icon" href="../assets/icons/logo.ico">
    <link rel="stylesheet" href="../assets/styles/base.css">
    <link rel="stylesheet" href="../assets/styles/pages/inscription.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <nav>
        <div class="nav__logo">
            <img src="../assets/icons/logo.ico" alt="Logo de C-Heart">
        </div>

        <div class="nav__title">
            <h1>Child-Heart</h1>
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
                if ($_GET['error'] == 'passwords_not_matching') {
                    echo '<p class="error_message">Les mots de passe ne correspondent pas !</p>';
                } elseif ($_GET['error'] == 'missing_data') {
                    echo '<p class="error_message">Vous devez entrer votre mot de passe</p>';
                }
            }
            ?>
            <h2>Réinitialiser mon mot de passe </h2>

            <div class="grid-container">
                <form action="reset_password.php" method="post">
                    <input type="password" id="password" placeholder="Nouveau mot de passe"/>
                    <input type="password" id="confirm_password" placeholder="Confirmer mot de passe"/>
                    <input type="hidden" value="<?php echo $_GET["token"]?>">
                    <div class="Valider_Retour">
                        <input type="submit" value="Réinitialiser votre mot de passe"/>
                        <a href="../mdpOublie1/index.php"><input id="retour" value="Retour"/></a>
                    </div>
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
