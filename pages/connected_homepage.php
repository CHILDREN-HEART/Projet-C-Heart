<?php
$host = "herogu.garageisep.com";
$dbname = "tw7TQUoQ7u_cheart";
$username = "HCjpLtsbkh_cheart";
$password = "dRQscVBnTH6HWDYK";

//$host = "localhost";
//$dbname = "c_heart";
//$username = "root";
//$password = "";


session_start();

echo "Bonjour ! Tu es connecté à l'utilisateur ayant l'id " . $_SESSION['user'];

$mysqlInstance = new PDO("mysql:dbname=$dbname;host=$host", $username, $password);

$statement = $mysqlInstance->prepare("SELECT * FROM utilisateur WHERE id = :user_id");
$statement->execute([
    'user_id' => $_SESSION['user']
]);

$data = $statement->fetch();

echo "Tu es connecté en tant que " . $data['mail'];


?>

<form action="../controllers/logout.php" method="post">
    <input type="submit" value="Se déconnecter"/>
