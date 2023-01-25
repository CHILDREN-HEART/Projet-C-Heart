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

    $data = $statement->fetch();

    if ($data[0]['ID'] != $_SESSION['user']) {
        header('Location: index.php?error=email_already_used');
        exit();
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]+$/")))) {
        header('Location: index.php?error=invalid_email');
        exit();
    }

    if (!isset($_POST['nom'])) {
        header('Location: index.php?error=invalid_name');
        exit();
    }

    if (!isset($_POST['prenom'])) {
        header('Location: index.php?error=invalid_firstname');
        exit();
    }

    if (!filter_var($_POST['telephone'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[0-9]+$/")))) {
        header('Location: ../pages/inscription.php?error=invalid_phone');
        exit();
    }

    if (!isset($_POST['nom_enfant'])) {
        header('Location: ../pages/inscription.php?error=invalid_name');
        exit();
    }


    if (!isset($_POST['prenom_enfant'])) {
        header('Location: ../pages/inscription.php?error=invalid_firstname');
        exit();
    }

    if (!isset($_POST['taille'])) {// || (!filter_var($_POST['taille'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[0-9]+$/"))))) {
        header('Location: ../pages/inscription.php?error=invalid_size');
        exit();
    }

    if (!isset($_POST['poids'])) {// || ($_POST['poids'] != "" && !filter_var($_POST['poids'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[0-9]+$/"))))) {
        header('Location: ../pages/inscription.php?error=invalid_weight');
        exit();
    }

    // récupère les données du formulaire
    $nom = $mysqlInstance->quote(trim($_POST['nom']));
    $prenom = $mysqlInstance->quote(trim($_POST['prenom']));
    $nom_enfant = $mysqlInstance->quote(trim($_POST['nom_enfant']));
    $prenom_enfant = $mysqlInstance->quote(trim($_POST['prenom_enfant']));
    $taille = $mysqlInstance->quote(trim($_POST['taille']));
    $poids = $mysqlInstance->quote(trim($_POST['poids']));
    $telephone = isset($_POST['telephone']) ? $mysqlInstance->quote(trim($_POST['telephone'])) : "";
    $email = isset($_POST['email']) ? $mysqlInstance->quote(trim($_POST['email'])) : "";
    $password = isset($_POST['password']) ? $mysqlInstance->quote(trim($_POST['password'])) : "";
    $confirm_password = isset($_POST['confirm_password']) ? $mysqlInstance->quote(trim($_POST['confirm_password'])) : "";

    $data = ([
        'nom' => $nom,
        'prenom' => $prenom,
        'nom_enfant' => $nom_enfant,
        'prenom_enfant' => $prenom_enfant,
        'taille' => $taille,
        'poids' => $poids,
        'telephone' => $telephone,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'id_utilisateur' => $_SESSION['user']
    ]);

    $statement = $mysqlInstance->prepare("UPDATE utilisateurs SET nom=:nom, prenom=:prenom, nom_enfant=:nom_enfant, prenom_enfant=:prenom_enfant, taille=:taille, poids=:poids, telephone=:telephone, mail=:email, password = :password WHERE ID=:id_utilisateur");
    $statement->execute([
        'nom' => $nom,
        'prenom' => $prenom,
        'nom_enfant' => $nom_enfant,
        'prenom_enfant' => $prenom_enfant,
        'taille' => $taille,
        'poids' => $poids,
        'telephone' => $telephone,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'id_utilisateur' => $_SESSION['user']
    ]);

}
