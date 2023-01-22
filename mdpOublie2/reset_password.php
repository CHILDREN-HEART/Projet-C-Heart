<?php
$host = "herogu.garageisep.com";
$dbname = "tw7TQUoQ7u_cheart";
$username = "HCjpLtsbkh_cheart";
$password = "dRQscVBnTH6HWDYK";

//$host = "localhost";
//$dbname = "c_heart";
//$username = "root";
//$password = "";

$token = $_GET['token'];
echo $_GET['token'];

if (isset($_POST['password']) && isset($_POST['confirm_password']) && isset($token)) {

    if ($_POST['password'] == "" || $_POST['confirm_password'] == "" || $token == "") {
        header("Location: index.php?token=$token&error=missing_data");
        exit();
    }

    if ($_POST['password'] != $_POST['confirm_password']) {
        header("Location: index.php?token=$token&error=passwords_not_matching");
        exit();
    }

    $mysqlInstance = new PDO("mysql:dbname=$dbname;host=$host", $username, $password);


    $statement = $mysqlInstance->prepare("UPDATE utilisateur SET (password,reset_password_token) VALUES (:password,NULL) WHERE reset_password_token = :token");
    $statement->execute([
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
    ]);
    header('Location: ./pages/connexion.php');

    exit();
}


