<?php

require_once('../utils/database.php');

if (!isset($_POST['accept_terms']) && $_POST['accept_terms'] != 'yes') {
    // La checkbox n'a pas été cochée
    header('Location: ../pages/inscription.php?error=missing_data');
    exit();
}

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['surname']) && isset($_POST['firstname']) && isset($_POST['phone'])) {

    if ($_POST['email'] == "" || $_POST['password'] == "" || $_POST['confirm_password'] == "" || $_POST['surname'] == "" || $_POST['firstname'] == "" || $_POST['phone'] == "") {
        header('Location: ../pages/inscription.php?error=missing_data');
        exit();
    }

    if ($_POST['password'] != $_POST['confirm_password']) {
        header('Location: ../pages/inscription.php?error=passwords_not_matching');
        exit();
    }

    $statement = $mysqlInstance->prepare("SELECT * FROM utilisateur WHERE mail = :email");
    $statement->execute([
        'email' => $_POST['email']
    ]);

    $data = $statement->fetchAll();

    if (count($data) > 0) {
        header('Location: ../pages/inscription.php?error=email_already_used');
        exit();
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        header('Location: ../pages/inscription.php?error=invalid_email');
        exit();
    }

    if (!filter_var($_POST['surname'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z]+$/")))) {
        header('Location: ../pages/inscription.php?error=invalid_name');
        exit();
    }

    if (!filter_var($_POST['firstname'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z]+$/")))) {
        header('Location: ../pages/inscription.php?error=invalid_firstname');
        exit();
    }

    if (!filter_var($_POST['phone'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[0-9]+$/")))) {
        header('Location: ../pages/inscription.php?error=invalid_phone');
        exit();
    }

    $date = (new DateTime('now', new DateTimeZone('Europe/Paris')))->format('Y-m-d H:i:s');
    $statement = $mysqlInstance->prepare("INSERT INTO utilisateur (mail, password, nom, prenom, telephone, date_inscription) VALUES (:email, :password, :surname, :firstname, :phone, :date_inscription)");
    $statement->execute([
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        'surname' => $_POST['surname'],
        'firstname' => $_POST['firstname'],
        'phone' => $_POST['phone'],
        'date_inscription' => $date
    ]);

    header('Location: ../pages/connexion.php');

    exit;
}

header('Location: ../pages/inscription.php?error=missing_data');
