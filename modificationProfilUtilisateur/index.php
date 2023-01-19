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
            <?php
            if (isset($_SESSION['erreurs']) && !empty($_SESSION['erreurs'])) {
                echo '<h1>Erreur!</h1>';
                echo '<p class="error">Les erreurs suivantes sont survenues :<br>';
                foreach ($_SESSION['erreurs'] as $msg) {
                    echo " - $msg<br>\n";
                }
                echo '</p><p>Veuillez réessayer.</p>';
                unset($_SESSION['erreurs']);
            }
            ?>
            <h2>
                Modifier votre profil
            </h2>
            <div class="grid-container">
                <form action="modifProfil.php" method="post">
                    <!-- Remplir le placeholder avec la valeur de la base de données si elle existe -->
                    <?php
                    if (!empty($_SESSION['nom'])) {
                        echo '<input type="text" id="surname" placeholder="' . $_SESSION['nom'] . '"/>';
                    } else {
                        echo '<input type="text" id="surname" placeholder="Nom Parent"/>';
                    }
                    ?>
                    <!-- Remplir le placeholder avec la valeur de la base de données si elle existe -->
                    <?php
                    if (!empty($_SESSION['prenom'])) {
                        echo '<input type="text" id="firstname" placeholder="' . $_SESSION['prenom'] . '"/>';
                    } else {
                        echo '<input type="text" id="firstname" placeholder="Prénom Parent"/>';
                    }
                    ?>
                    <!-- Remplir le placeholder avec la valeur de la base de données si elle existe -->
                    <?php
                    if (!empty($_SESSION['nom_enfant'])) {
                        echo '<input type="text" id="surname" placeholder="' . $_SESSION['nom_enfant'] . '"/>';
                    } else {
                        echo '<input type="text" id="surname" placeholder="Nom Enfant"/>';
                    }
                    ?>
                    <!-- Remplir le placeholder avec la valeur de la base de données si elle existe -->
                    <?php
                    if (!empty($_SESSION['prenom_enfant'])) {
                        echo '<input type="text" id="firstname" placeholder="' . $_SESSION['prenom_enfant'] . '"/>';
                    } else {
                        echo '<input type="text" id="firstname" placeholder="Prénom Enfant"/>';
                    }
                    ?>
                    <!-- Remplir le placeholder avec la valeur de la base de données si elle existe -->
                    <?php
                    if (!empty($_SESSION['taille'])) {
                        echo '<input type="text" id="taille" placeholder="' . $_SESSION['taille'] . '"/>';
                    } else {
                        echo '<input type="text" id="taille" placeholder="Taille Enfant"/>';
                    }
                    ?>
                    <!-- Remplir le placeholder avec la valeur de la base de données si elle existe -->
                    <?php
                    if (!empty($_SESSION['poids'])) {
                        echo '<input type="text" id="poids" placeholder="' . $_SESSION['poids'] . '"/>';
                    } else {
                        echo '<input type="text" id="poids" placeholder="Poids Enfant"/>';
                    }
                    ?>
                    <!-- Remplir le placeholder avec la valeur de la base de données si elle existe -->
                    <?php
                    if (!empty($_SESSION['telephone'])) {
                        echo '<input type="text" id="phone" placeholder="' . $_SESSION['telephone'] . '"/>';
                    } else {
                        echo '<input type="text" id="phone" placeholder="Numéro de téléphone"/>';
                    }
                    ?>
                    <!-- Remplir le placeholder avec la valeur de la base de données si elle existe -->
                    <?php
                    if (!empty($_SESSION['mail'])) {
                        echo '<input type="text" id="email" placeholder="' . $_SESSION['mail'] . '"/>';
                    } else {
                        echo '<input type="text" id="email" placeholder="Adresse mail"/>';
                    }
                    ?>

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
    <?php include('../header_footer/footer1.php'); ?>
</footer>

</body>

</html>

<!--<!doctype html>-->
<!--<html lang="fr">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Modifier Profil</title>-->
<!--    <link rel="shortcut icon" href="../assets/icons/logo.ico">-->
<!--    <link rel="stylesheet" href="../assets/styles/base.css">-->
<!--    <link rel="stylesheet" href="styletempo.css">-->
<!--</head>-->
<!--<body>-->
<!--<header>-->
<!--    --><?php //include('../header_footer/header1.php'); ?>
<!--</header>-->
<!--<main>-->
<!--    <div class="grid">-->
<!---->
<!--        <div id="rectangle">-->
<!--            --><?php
//            if (isset($_SESSION['erreurs']) && !empty($_SESSION['erreurs'])) {
//                echo '<h1>Erreur!</h1>';
//                echo '<p class="error">Les erreurs suivantes sont survenues :<br>';
//                foreach ($_SESSION['erreurs'] as $msg) {
//                    echo " - $msg<br>\n";
//                }
//                echo '</p><p>Veuillez réessayer.</p>';
//                unset($_SESSION['erreurs']);
//            }
//            ?>
<!--            <h2>-->
<!--                Modifier votre profil-->
<!--            </h2>-->
<!--            <div class="grid-container">-->
<!--                <form action="modifProfil.php" method="post">-->
<!--                    <input type="text" id="surname" placeholder="Nom Parent"/>-->
<!--                    <input type="text" id="firstname" placeholder="Prénom Parent"/>-->
<!--                    <input type="text" id="surname" placeholder="Nom Enfant"/>-->
<!--                    <input type="text" id="firstname" placeholder="Prénom Enfant"/>-->
<!--                    <input type="text" id="taille" placeholder="Taille Enfant"/>-->
<!--                    <input type="text" id="poids" placeholder="Poids Enfant"/>-->
<!--                    <input type="text" id="phone" placeholder="Numéro de téléphone"/>-->
<!--                    <input type="text" id="email" placeholder="Adresse mail"/>-->
<!--                    <input type="password" id="password" placeholder="Modifier mot de passe"/>-->
<!--                    <input type="password" id="confirm_password" placeholder="Confirmer mot de passe"/>-->
<!--                    <div><label id="CGU"><a href="../CGU/CGU.php"> Consulter les Conditions Générales d'Utilisation-->
<!--                                (CGU) </a></label></div>-->
<!---->
<!--                    <input type="submit" value="Valider"/>-->
<!--                    <a href="../capteurParent/index.php"><input id="retour" value="Retour"/></a>-->
<!---->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</main>-->
<!---->
<!--<footer>-->
<!--    --><?php //include('../header_footer/footer1.php');?>
<!--</footer>-->
<!---->
<!--</body>-->
<!---->
<!--</html>-->



