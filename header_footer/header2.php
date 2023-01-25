<link rel="stylesheet" href="../assets/styles/components/header.css">
<div class="flexboxHeader">
    <div>
        <a href="../index.php"><img id="img1" src="../assets/icons/logo.ico" alt="logo"></a>
    </div>
    <div class="flexboxHeader2_2">
        <span id="CHeart">Child Heart</span>
    </div>

    <div class="flexboxHeader3_2">
        <a id="inscription" href=""><?php session_start();
            echo(($_SESSION['prenom'] ?? "Prénom") . " " . ($_SESSION['nom'] ?? "Nom")) ?></a>
    </div>
    <div class="flexboxHeader4">
        <?php
        if ($_SESSION['statut']== 'prof') {
            echo '<a href="../modificationProfilGestionnaire/index.php" class="logo_connexion"><img id="logo_connexion"
                                                                                         src="../assets/icons/profil.ico"
                                                                                         alt="logo_modif_profil" /></a>';
        } else {
            echo '<a href="../modificationProfilUtilisateur/index.php" class="logo_connexion"><img id="logo_connexion"
                                                                                         src="../assets/icons/profil.ico"
                                                                                         alt="logo_modif_profil" /></a>';
        }
        ?>
        <a href="../modificationProfilUtilisateur/index.php" class="logo_connexion"><img id="logo_connexion"
                                                                                         src="../assets/icons/profil.ico"
                                                                                         alt="logo_modif_profil" /></a>
    </div>

</div>
