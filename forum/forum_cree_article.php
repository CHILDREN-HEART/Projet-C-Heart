<?php

session_start();

$host = "herogu.garageisep.com";
$dbname = "tw7TQUoQ7u_cheart";
$username = "HCjpLtsbkh_cheart";
$password = "dRQscVBnTH6HWDYK";


//$host = "localhost";
//$dbname = "c_heart";
//$username = "root";
//$password = "";

if (isset($_POST['titre']) && isset($_POST['message'])) {
    $id = $_SESSION['user'];
    $mysqlInstance = new PDO("mysql:dbname=$dbname;host=$host", $username, $password);

    if (!empty($_SESSION['nom']) && !empty($_SESSION['prenom'])) {
        $nom = $_SESSION['nom'];
        $prenom = $_SESSION['prenom'];
    } else {
        header('Location: ./forum.php?error=missing_data');
        exit();
    }
    $date = (new DateTime('now', new DateTimeZone('Europe/Paris')))->format('Y-m-d H:i:s');
    $titre = filter_var($_POST['titre'], FILTER_SANITIZE_STRING);;
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    $statement = $mysqlInstance->prepare("INSERT INTO forum (ID, nom, prenom, date, titre, message) VALUES (:id, :nom, :prenom, :date, :titre, :message)");
    $statement->execute([
        'id' => $id,
        'nom' => $nom,
        'prenom' => $prenom,
        'date' => $date,
        'titre' => $titre,
        'message' => $message
    ]);

    header('Location: ./forum.php');
    exit();
}

header('Location: ./forum.php?error=missing_data');


//Probleme avec les '

//
////$host = "herogu.garageisep.com";
////$dbname = "tw7TQUoQ7u_cheart";
////$username = "HCjpLtsbkh_cheart";
////$password = "dRQscVBnTH6HWDYK";
//
//$host = "localhost";
//$dbname = "c_heart";
//$username = "root";
//$password = "";
//
//session_start();
//
//if (isset($_POST['titre']) && isset($_POST['message'])) {
//    $id = $_SESSION['user'];
//    $mysqlInstance = new PDO("mysql:dbname=$dbname;host=$host", $username, $password);
//    $titre = filter_var($_POST['titre'], FILTER_SANITIZE_STRING);
//    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
//
//    $statement = $mysqlInstance->prepare("SELECT * FROM utilisateur WHERE ID = :id");
//
//    $data = $statement->fetchAll();
//
//    $nom = $mysqlInstance->query("SELECT nom FROM utilisateur where id = $id")->fetchColumn();
//    $prenom = $mysqlInstance->query("SELECT prenom FROM utilisateur where id = $id")->fetchColumn();
//    $date = (new DateTime('now', new DateTimeZone('Europe/Paris')))->format('Y-m-d H:i:s');
//    $statement = $mysqlInstance->prepare("INSERT INTO forum (ID, nom, prenom, date, titre, message) VALUES (:id, :nom, :prenom, :date, :titre, :message)");
//    $statement->execute([
//        'id' => $id,
//        'nom' => $_SESSION['nom'],
//        'prenom' => $_SESSION['prenom'],
//        'date' => $date,
//        'titre' => $_POST['titre'],
//        'message' => $_POST['message']
//    ]);
//
//
//    header('Location: ./forum.php');
//
////    exit;
//}
//
//header('Location: ../pages/forum.php?error=missing_data');
