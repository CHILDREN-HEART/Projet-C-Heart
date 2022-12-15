<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connectez-vous</title>
    <link rel="shortcut icon" href="../assets/icons/logo.ico">
    <link rel="stylesheet" href="../assets/styles/base.css">
</head>
<body>
<main>
    <div class="grid">
        <div id="rectangle">
            <?php
            if ($_GET['error'] == 'missing_data') {
                echo '<p>Vous devez remplir tous les champs</p>';
            } else if ($_GET['error'] == 'wrong_credentials') {
                echo '<p>Identifiants incorrects</p>';
            } else if ($_GET['error'] == 'invalid_email') {
                echo '<p>Cet email n\'est pas valide</p>';
            }
            ?>
            <h2>Connectez-vous</h2>
            <div class="grid-container">
                <form action="../controllers/login.php" method="post">
                    <input type="text" id="login" name="login" placeholder="Adresse mail" />
                    <input type="password" id="password" name="password" placeholder="Mot de passe" />
                    <div class="Valider_Retour">
                        <input type="submit" value="Se Connecter" />

                        <a href="/connexion" target="_blank"><input type="button" value="Retour" /></a>
                        <div><a href="/mdpOublie1" target="_blank">Mot de passe oublié ?</a></div>
                        <div>ou</div>
                        <div><a href="/inscription" target="_blank">S'inscrire</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<!--<footer>-->
<!--    --><?php //include('../header_footer/footer1.php'); ?>
<!--</footer>-->

</body>

</html>
