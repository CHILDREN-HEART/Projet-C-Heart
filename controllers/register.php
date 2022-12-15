<?php

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {

    if ($_POST['email'] == "" || $_POST['password'] == "" || $_POST['confirm_password'] == "") {
        header('Location: ../pages/inscription.php?error=missing_data');
        exit();
    }

    if ($_POST['password'] != $_POST['confirm_password']) {
        header('Location: ../pages/inscription.php?error=passwords_not_matching');
        exit();
    }

    $mysqlInstance = new PDO("mysql:dbname=teroaz;host=visionrp.fr", "user", "password");

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


    $statement = $mysqlInstance->prepare("INSERT INTO utilisateur (mail, password) VALUES (:email, :password)");
    $statement->execute([
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
    ]);

    header('Location: ../index.php');

    exit;
}

header('Location: ../pages/inscription.php?error=missing_data');
