<?php
$host = "localhost";
$dbname = "c_heart";
$username = "root";
$password = "";

if ( empty(session_id()) ) session_start();

echo "Bonjour jeune beau gosse ! Tu es connecté à l'utilisateur ayant l'id " . $_SESSION['user'];


$mysqlInstance = new PDO("mysql:dbname=$dbname;host=$host", $username, $password);

$statement = $mysqlInstance->prepare("SELECT * FROM utilisateur WHERE id = :user_id");
$statement->execute([
    'user_id' => $_SESSION['user']
]);

$data = $statement->fetch();

echo "Tu es connecté en tant que " . $data['mail'];


?>

<form action="../controllers/logout.php" method="post">
    <input type="submit" value="Se déconnecter" />
