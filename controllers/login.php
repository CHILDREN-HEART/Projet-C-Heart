<?php
$host = "localhost";
$dbname = "c_heart";
$username = "root";
$password = "";

if (isset($_POST['login']) || isset($_POST['password'])) {

    if ($_POST['login'] == "" || $_POST['password'] == "") {
        header('Location: ../pages/connexion.php?error=missing_data');
        exit();
    }

    if (!filter_var($_POST['login'], FILTER_VALIDATE_EMAIL)) {
        header('Location: ../pages/connexion.php?error=invalid_email');
        exit();
    }

    $mysqlInstance = new PDO("mysql:dbname=$dbname;host=$host", $username, $password);

    $statement = $mysqlInstance->prepare("SELECT * FROM utilisateur WHERE mail = :email");
    $statement->execute([
        'email' => $_POST['login']
    ]);

    $data = $statement->fetch();

    if (!$data) {
        header('Location: ../pages/connexion.php?error=wrong_credentials');
        exit();
    }

    $passwordMatches = password_verify($_POST['password'], $data['password']);

    if (!$passwordMatches) {
        header('Location: ../pages/connexion.php?error=wrong_credentials');
        exit();
    }

    if ( empty(session_id()) ) session_start();
    $_SESSION['user'] = $data['id'];

    header('Location: ../index.php');
    exit();
//    if (count($data) == 0) {
//        header('Location: ../pages/connexion.php?error=wrong_credentials');
//        exit();
//    }
//
//    password_verify()
}

header('Location: ../pages/connexion.php?error=missing_data');
