<link rel="stylesheet" href="header2.css">
<div class="flexboxHeader">
    <div>
        <img id="img1" src="../assets/icons/logo.ico" alt="logo">
    </div>
    <div class="flexboxHeader2_2">
        <span>Child Heart</span>
    </div>

    <div class="flexboxHeader3_2">
        <a id="inscription" href=""><?php session_start();
            echo(($_SESSION['prenom'] ?? "Prénom") . " " . ($_SESSION['nom'] ?? "Nom")) ?></a>
    </div>
    <div class="flexboxHeader4">
        <a href="../modificationProfilUtilisateur/index.php" class="logo_connexion"><img id="logo_connexion"
                                                                                         src="../assets/icons/profil.ico"
                                                                                         alt="logo_modif_profil" /></a>
    </div>

</div>
