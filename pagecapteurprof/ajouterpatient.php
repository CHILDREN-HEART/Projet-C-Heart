<?php
//$host = "herogu.garageisep.com";
//$dbname = "tw7TQUoQ7u_cheart";
//$username = "HCjpLtsbkh_cheart";
//$password = "dRQscVBnTH6HWDYK";
$host = "localhost";
$dbname = "c_heart";
$username = "root";
$password = "";
try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (Exception $e) {
//en cas d'erreur on affiche un message et on arrete tout
    die('Erreur : ' . $e->getMessage());
}
$id = $_GET["id"];
$sql = 'INSERT into classe SELECT id,nom,prenom,mail FROM utilisateur where id = ?';
$stmt = $bdd->prepare($sql);
$stmt->execute([$id]);
if ($stmt) {
    header('location: ./ajouter_patient_medecin.php');
}

?>