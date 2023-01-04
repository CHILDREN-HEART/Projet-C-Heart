<?php


$host = "herogu.garageisep.com";
$dbname = "tw7TQUoQ7u_cheart";
$username = "HCjpLtsbkh_cheart";
$password = "dRQscVBnTH6HWDYK";

//$host = "localhost";
//$dbname = "c_heart";
//$username = "root";
//$password = "";

// vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['password'] != $_POST['confirm_password']) {
        header('Location: index.php?error=passwords_not_matching');
        exit();
    }

    // connecte à la base de données
    $mysqlInstance = new PDO("mysql:dbname=$dbname;host=$host", $username, $password);
    $statement = $mysqlInstance->prepare("SELECT * FROM utilisateur WHERE mail = :email");
    $statement->execute([
        'email' => $_POST['email']
    ]);

    $data = $statement->fetchAll();

    if (count($data) > 0) {
        header('Location: index.php?error=email_already_used');
        exit();
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        header('Location: index.php?error=invalid_email');
        exit();
    }

    if (!filter_var($_POST['nom'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z]+$/")))) {
        header('Location: index.php?error=invalid_name');
        exit();
    }

    if (!filter_var($_POST['prenom'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z]+$/")))) {
        header('Location: index.php?error=invalid_firstname');
        exit();
    }

    if (!filter_var($_POST['telephone'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[0-9]+$/")))) {
        header('Location: ../pages/inscription.php?error=invalid_phone');
        exit();
    }

    if (!filter_var($_POST['nom_enfant'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z]+$/")))) {
        header('Location: ../pages/inscription.php?error=invalid_name');
        exit();
    }


    if (!filter_var($_POST['prenom_enfant'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z]+$/")))) {
        header('Location: ../pages/inscription.php?error=invalid_firstname');
        exit();
    }

    if (!filter_var($_POST['taille'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[0-9]+$/")))) {
        header('Location: ../pages/inscription.php?error=invalid_size');
        exit();
    }

    if (!filter_var($_POST['poids'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[0-9]+$/")))) {
        header('Location: ../pages/inscription.php?error=invalid_weight');
        exit();
    }

    // récupère les données du formulaire
    $nom = isset($_POST['nom']) ? $mysqlInstance->quote(trim($_POST['nom'])) : "";
    $prenom = isset($_POST['prenom']) ? $mysqlInstance->quote(trim($_POST['prenom'])) : "";
    $nom_enfant = isset($_POST['nom_enfant']) ? $mysqlInstance->quote(trim($_POST['nom_enfant'])) : "";
    $prenom_enfant = isset($_POST['prenom_enfant']) ? $mysqlInstance->quote(trim($_POST['prenom_enfant'])) : "";
    $taille = isset($_POST['taille']) ? $mysqlInstance->quote(trim($_POST['taille'])) : "";
    $poids = isset($_POST['poids']) ? $mysqlInstance->quote(trim($_POST['poids'])) : "";
    $telephone = isset($_POST['telephone']) ? $mysqlInstance->quote(trim($_POST['telephone'])) : "";
    $email = isset($_POST['email']) ? $mysqlInstance->quote(trim($_POST['email'])) : "";
    $password = isset($_POST['password']) ? $mysqlInstance->quote(trim($_POST['password'])) : "";
    $confirm_password = isset($_POST['confirm_password']) ? $mysqlInstance->quote(trim($_POST['confirm_password'])) : "";


    // met à jour le profil de l'utilisateur

    $requete = "UPDATE utilisateurs SET nom=$nom, prenom=$prenom, nom_enfant=$nom_enfant, prenom_enfant=$prenom_enfant, taille=$taille, poids=$poids, telephone=$telephone, mail=$email", password = password_hash($password, PASSWORD_DEFAULT);
    $requete .= " WHERE id_utilisateur=1";
    $mysqlInstance->query($requete);
}


//
//$host = "localhost";
//$dbname = "c_heart";
//$username = "root";
//$password = "";
//
//// vérifie si le formulaire a été soumis
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//
//    // connecte à la base de données
//    $mysqlInstance = new PDO("mysql:dbname=$dbname;host=$host", $username, $password);
//
//    // récupère les données du formulaire
//    $nom = $mysqlInstance->quote(trim($_POST['nom']));
//    $prenom = $mysqlInstance->quote(trim($_POST['prenom']));
//    $nom_enfant = $mysqlInstance->quote(trim($_POST['nom_enfant']));
//    $prenom_enfant = $mysqlInstance->quote(trim($_POST['prenom_enfant']));
//    $taille = $mysqlInstance->quote(trim($_POST['taille']));
//    $poids = $mysqlInstance->quote(trim($_POST['poids']));
//    $telephone = $mysqlInstance->quote(trim($_POST['telephone']));
//    $email = $mysqlInstance->quote(trim($_POST['email']));
//    $mot_de_passe = $mysqlInstance->quote(trim($_POST['mot_de_passe']));
//    $confirmer_mot_de_passe = $mysqlInstance->quote(trim($_POST['confirmer_mot_de_passe']));
//
//    // initialise un tableau d'erreurs
//    $erreurs = array();
//
//    // valide les données du formulaire
//    if (empty($nom)) {
//        $erreurs[] = 'Vous devez entrer votre nom.';
//    }
//    if (empty($prenom)) {
//        $erreurs[] = 'Vous devez entrer votre prénom.';
//    }
//    if (empty($nom_enfant)) {
//        $erreurs[] = "Vous devez entrer le nom de l'enfant.";
//    }
//    if (empty($prenom_enfant)) {
//        $erreurs[] = "Vous devez entrer le prénom de l'enfant.";
//    }
//    if (empty($taille)) {
//        $erreurs[] = "Vous devez entrer la taille de l'enfant.";
//    }
//    if (empty($poids)) {
//        $erreurs[] = "Vous devez entrer le poids de l'enfant.";
//    }
//    if (empty($telephone)) {
//        $erreurs[] = 'Vous devez entrer votre numéro de téléphone.';
//    }
//    if (empty($email)) {
//        $erreurs[] = 'Vous devez entrer votre adresse mail.';
//    }
//    if (!empty($mot_de_passe) && ($mot_de_passe != $confirmer_mot_de_passe)) {
//        $erreurs[] = 'Votre mot de passe et votre confirmation ne correspondent pas.';
//    }
//
//    // si il n'y a pas d'erreurs, met à jour le profil de l'utilisateur
//    if (empty($erreurs)) {
//        $requete = "UPDATE utilisateurs SET nom=$nom, prenom=$prenom, nom_enfant=$nom_enfant, prenom_enfant=$prenom_enfant, taille=$taille, poids=$poids, telephone=$telephone, mail=$email";
//        if (!empty($mot_de_passe)) {
//            $requete .= ", mot_de_passe=SHA1($mot_de_passe)";
//        }
//        $requete .= " WHERE id_utilisateur=". $_SESSION['id_utilisateur'];
//        $mysqlInstance->exec($requete);
//
//        // ferme la connexion à la base de données
//        $mysqlInstance = null;
//
//        // redirige l'utilisateur vers la page de profil
//        header('Location: profil.php');
//        exit();
//    }
//    else {
//        // affiche les erreurs
//        echo '<h1>Erreur!</h1>
//          <p class="erreur">Les erreurs suivantes sont survenues :<br>';
//        foreach ($erreurs as $msg) {
//            echo " - $msg<br>\n";
//        }
//        echo '</p><p>Veuillez réessayer.</p>';
//    }
//}
//
//?>
