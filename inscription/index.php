<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Inscription</title>
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
            <h2>Inscrivez-vous</h2>
            <div class="grid-container">
                <form>
                    <input type="text" id="surname" placeholder="Nom"/>
                    <input type="text" id="firstname" placeholder="Prénom"/>
                    <input type="text" id="phone" placeholder="Numéro de téléphone"/>
                    <input type="text" id="email" placeholder="Adresse mail"/>
                    <input type="password" id="password" placeholder="Mot de passe"/>
                    <input type="password" id="confirm_password" placeholder="Confirmer mot de passe"/>
                    <label><input type="checkbox"/><a href="" target="_blank">Accepter les Conditions Générales
                            d'Utilisation (CGU)</a></label>
                    <div class="Valider_Retour">
                        <input type="submit" value="Valider"/>
                        <a href="../index.php"><input type="button" value="Retour"/></a>
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
