<?php
$host = "herogu.garageisep.com";
$dbname = "tw7TQUoQ7u_cheart";
$username = "HCjpLtsbkh_cheart";
$password = "dRQscVBnTH6HWDYK";
//$host = "localhost";
//$dbname = "c_heart";
//$username = "root";
//$password = "";

try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (Exception $e) {
//en cas d'erreur on affiche un message et on arrete tout
    die('Erreur : ' . $e->getMessage());
}
$id = $_GET["id"];
$sql = 'DELETE from classe WHERE id = ?';
$stmt = $bdd->prepare($sql);
$stmt->execute([$id]);
header('location: ./index.php');


?>