<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, height=device-height, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connectez-vous</title>
    <link rel="shortcut icon" href="../assets/Logo.png">
    <link rel="stylesheet" href="../header_footer/header1.css">
    <link rel="stylesheet" href="../header_footer/footer1.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
</head>
<body>
<header>
    <?php include('../header_footer/header1.php'); ?>
</header>
<main>
    <div class="grid">

        <div id="rectangle">
            <h2>Connectez-vous</h2>
            <div class="grid-container">
                <form action="connexion.php" method="post">
                    <input type="text" id="login" name="login" placeholder="Adresse mail"/>
                    <input type="password" id="password" name="password" placeholder="Mot de passe"/>
                    <div class="Valider_Retour">
                        <input type="submit" value="Se Connecter"/>
                        <a href="/connexion" target="_blank"><input type="button" value="Retour"/></a>
                        <div><a href="/mdpOublie1" target="_blank">Mot de passe oublié ?</a></div>
                        <div>ou</div>
                        <div><a href="/inscription" target="_blank">S'inscrire</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<footer>
    <?php include('../header_footer/footer1.php'); ?>
</footer>

</body>

</html>