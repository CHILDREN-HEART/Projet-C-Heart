<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
};

echo "Bonjour ! Tu es connecté à l'utilisateur ayant l'id " . $_SESSION['user'] . " !";

require_once('./utils/database.php');

$statement = $mysqlInstance->prepare("SELECT * FROM utilisateur WHERE id = :user_id");
$statement->execute([
    'user_id' => $_SESSION['user']
]);

$data = $statement->fetch();

echo " Tu es connecté en tant que " . $data['mail'];


?>

<form action="./controllers/logout.php" method="post">
    <input type="submit" value="Se déconnecter"/>
