<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mot de passe oublié</title>
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
            <h2>Réinitialiser mon mot de passe </h2>
            <div id="aide1">1 - Entrez l’adresse e-mail associée à votre compte ci-dessous.</div>
            <div id="aide2">2 - Vous allez recevoir un email, cliquez sur le lien pour choisir un nouveau mot de
                passe.
            </div>
            <div id="aide3">3 - Après la validation de votre nouveau mot de passe, vous êtes connecté(e) à votre compte
                !
            </div>
            <div class="grid-container">
                <input type="password" id="password" placeholder="Nouveau mot de passe"/>
                <input type="password" id="confirm_password" placeholder="Confirmer mot de passe"/>
                <div class="Valider_Retour">
                    <input type="submit" value="Réinitialiser votre mot de passe"/>
                    <input type="submit" value="Retour"/>
                </div>
            </div>
        </div>
    </div>
</main>

<footer>
    <?php include('../header_footer/footer1.php'); ?>
</footer>

</body>

</html>