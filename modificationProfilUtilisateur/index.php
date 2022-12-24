<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier Profil</title>
    <link rel="shortcut icon" href="../assets/icons/logo.ico">
    <link rel="stylesheet" href="../assets/styles/base.css">
    <link rel="stylesheet" href="styletempo.css">
</head>
<body>
<header>
    <?php include('../header_footer/header1.php'); ?>
</header>
<main>
    <div class="grid">

        <div id="rectangle">
            <h2>
                Modifier votre profil
            </h2>
            <div class="grid-container">
                <form>
                    <input type="text" id="surname" placeholder="Nom Parent"/>
                    <input type="text" id="firstname" placeholder="Prénom Parent"/>
                    <input type="text" id="surname" placeholder="Nom Enfant"/>
                    <input type="text" id="firstname" placeholder="Prénom Enfant"/>
                    <input type="text" id="taille" placeholder="Taille Enfant"/>
                    <input type="text" id="poids" placeholder="Poids Enfant"/>
                    <input type="text" id="phone" placeholder="Numéro de téléphone"/>
                    <input type="text" id="email" placeholder="Adresse mail"/>
                    <input type="password" id="password" placeholder="Modifier mot de passe"/>
                    <input type="password" id="confirm_password" placeholder="Confirmer mot de passe"/>
                    <div><label id="CGU"><a href="../CGU/CGU.php"> Consulter les Conditions Générales d'Utilisation
                                (CGU) </a></label></div>

                    <input type="submit" value="Valider"/>
                    <a href="../capteurParent/index.php"><input id="retour" value="Retour"/></a>

                </form>
            </div>
        </div>
    </div>
</main>

<footer>
    <?php require('../components/footer1.php'); ?>
</footer>

</body>

</html>
