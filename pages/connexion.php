<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connectez-vous</title>
    <link rel="shortcut icon" href="../assets/icons/logo.ico">
    <link rel="stylesheet" href="../assets/styles/base.css">
    <link rel="stylesheet" href="../assets/styles/pages/inscription.css">
    <link rel="stylesheet" href="../assets/styles/pages/connexiontempo.css">
</head>
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
<body>
<main>
    <div class="grid">
        <div id="rectangle">
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == 'missing_data') {
                    echo '<p>Vous devez remplir tous les champs</p>';
                } else if ($_GET['error'] == 'wrong_credentials') {
                    echo '<p>Identifiants incorrects</p>';
                } else if ($_GET['error'] == 'invalid_email') {
                    echo '<p>Cet email n\'est pas valide</p>';
                }
            }

            if (isset($_GET['reset'])) {
                if ($_GET['reset'] == 'success') {
                    echo '<p> L email de réinitialisation de mot de passe a été envoyé</p>';
                }
            }
            ?>
            <h2>Connectez-vous</h2>
            <div class="grid-container">
                <form action="../controllers/login.php" method="post">
                    <input type="text" id="login" name="login" placeholder="Adresse mail"/>
                    <input type="password" id="password" name="password" placeholder="Mot de passe"/>
                    <div class="Valider_Retour">
                        <input type="submit" value="Se Connecter"/>
                        <a href="../index.php"><input id="retour" value="Retour"/></a>
                        <div><a href="../mdpOublie1">Mot de passe oublié ?</a></div>
                        <div>ou</div>
                        <div><a href="./inscription.php">S'inscrire</a></div>
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


