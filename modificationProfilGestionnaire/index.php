<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Modifier Profil</title>
    <link rel="shortcut icon" href="../assets/icons/logo.ico">
    <link rel="stylesheet" href="../assets/styles/base.css">
    <link rel="stylesheet" href="../modificationProfilUtilisateur/styletempo.css">
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
            <h2>Modifier votre profil</h2>
            <div class="grid-container">
                <form action="modifProfil.php" method="post">
                    <!-- Remplir le placeholder avec la valeur de la base de données si elle existe -->
                    <?php

                    require_once("../utils/database.php");
                    session_start();

                    $statement = $mysqlInstance->prepare("SELECT * FROM utilisateur WHERE ID = :id_utilisateur");
                    $statement->execute([
                        'id_utilisateur' => $_SESSION['user']
                    ]);

                    $data = $statement->fetch();

                    if (!empty($data['nom'])) {
                        echo '<input type="text" name="nom" value="' . $data['nom'] . '"/>';
                    } else {
                        echo '<input type="text" name="nom" placeholder="Nom"/>';
                    }
                    ?>

                    <!-- Remplir le placeholder avec la valeur de la base de données si elle existe -->
                    <?php
                    if (!empty($data['prenom'])) {
                        echo '<input type="text" name="prenom" value="' . $data['prenom'] . '"/>';
                    } else {
                        echo '<input type="text" name="prenom" placeholder="Prénom"/>';
                    }
                    ?>
                    <!-- Remplir le placeholder avec la valeur de la base de données si elle existe -->
                    <?php
                    if (!empty($data['telephone'])) {
                        echo '<input type="text" name="telephone" value="' . $data['telephone'] . '"/>';
                    } else {
                        echo '<input type="text" name="telephone" placeholder="Numéro de téléphone"/>';
                    }
                    ?>

                    <!-- Remplir le placeholder avec la valeur de la base de données si elle existe -->
                    <?php
                    if (!empty($data['mail'])) {
                        echo '<input type="text" name="email" value="' . $data['mail'] . '"/>';
                    } else {
                        echo '<input type="text" name="email" placeholder="Adresse mail"/>';
                    }
                    ?>
                    <input type="password" id="password" placeholder="Modifier mot de passe"/>
                    <input type="password" id="confirm_password" placeholder="Confirmer mot de passe"/>
                    <label id="CGU">
                        <div><label id="CGU"><a href="../CGU/CGU.php"> Consulter les Conditions Générales d'Utilisation
                                    (CGU) </a></label></div>
                        <div class="Valider_Retour">
                            <input type="submit" value="Valider"/>
                            <a href="../pagecapteurprof/index.php"><input id="retour" value="Retour"/></a>
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
