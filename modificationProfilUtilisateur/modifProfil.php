<?php

require_once('../utils/database.php');

// vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if ($_POST['password'] != $_POST['confirm_password']) {
        header('Location: ./index.php?error=passwords_not_matching');
        exit();
    }

    if ($_POST['password'] == "" || $_POST['confirm_password'] == "") {
        header('Location: ./index.php?error=passwords_not_matching');
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
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $nom_enfant = trim($_POST['nom_enfant']);
    $prenom_enfant = trim($_POST['prenom_enfant']);
    $taille = trim($_POST['taille']);
    $poids = trim($_POST['poids']);
    $telephone = trim($_POST['telephone']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    $sqlRequest = "UPDATE utilisateur SET ";

    $datas = [];
    $modifications = [];

    if ($nom != "") {
        $modifications[] = "nom = :nom";
        $datas['nom'] = $nom;
    }

    if ($prenom != "") {
        $modifications[] = "prenom = :prenom";
        $datas['prenom'] = $prenom;
    }

    if ($nom_enfant != "") {
        $modifications[] = "nom_enfant = :nom_enfant";
        $datas['nom_enfant'] = $nom_enfant;
    }

    if ($prenom_enfant != "") {
        $modifications[] = "prenom_enfant = :prenom_enfant";
        $datas['prenom_enfant'] = $prenom_enfant;
    }

    if ($taille != "") {
        $modifications[] = "taille = :taille";
        $datas['taille'] = $taille;
    }

    if ($poids != "") {
        $modifications[] = "poids = :poids";
        $datas['poids'] = $poids;
    }

    if ($telephone != "") {
        $modifications[] = "telephone = :telephone";
        $datas['telephone'] = $telephone;
    }

    if ($email != "") {
        $modifications[] = "mail = :email";
        $datas['email'] = $email;
    }

    if ($password != "") {
        $modifications[] = "password = :password";
        $datas['password'] = password_hash($password, PASSWORD_DEFAULT);
    }

    $sqlRequest .= implode(", ", $modifications);

    $sqlRequest .= " WHERE ID = :id_utilisateur";


    $statement = $mysqlInstance->prepare($sqlRequest);
    $statement->execute($datas);

    header('Location: ../pages/inscription.php?success=update_success');

}
