<?php

require_once('../utils/database.php');

// vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['password'] != $_POST['confirm_password']) {
        header('Location: index.php?error=passwords_not_matching');
        exit();
    }

    // connecte à la base de données
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

    $requete = "UPDATE utilisateurs SET nom=$nom, prenom=$prenom, nom_enfant=$nom_enfant, prenom_enfant=$prenom_enfant, taille=$taille, poids=$poids, telephone=$telephone, mail=$email, password = password_hash($password, PASSWORD_DEFAULT)";
    $requete .= " WHERE id_utilisateur=1";
    $mysqlInstance->query($requete);
}
