<?php

session_start();

require_once('../utils/database.php');

$numero_article=$_GET['numero_article'];

if (isset($_POST['message'])) {
    $id = $_SESSION['user'];

    if (!empty($_SESSION['nom']) && !empty($_SESSION['prenom'])) {
        $nom = $_SESSION['nom'];
        $prenom = $_SESSION['prenom'];
    } else {
        header('Location: ./sujet.php?error=missing_data');
        exit();
    }
    $date = (new DateTime('now', new DateTimeZone('Europe/Paris')))->format('Y-m-d H:i:s');
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    $statement = $mysqlInstance->prepare("INSERT INTO forum_message (ID, nom, prenom, date, message,numero_article) VALUES (:id, :nom, :prenom, :date, :message,:numero_article)");
    $statement->execute([
        'id' => $id,
        'nom' => $nom,
        'prenom' => $prenom,
        'date' => $date,
        'message' => $message,
        'numero_article' => $numero_article
    ]);

    header("Location: ./sujet.php?numero_article=$numero_article");
    exit();
}

header('Location: ./sujet.php?error=missing_data');
