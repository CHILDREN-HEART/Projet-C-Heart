<?php

require_once('../utils/database.php');

$id = $_GET["id"];
$sql = 'INSERT into classe SELECT id,nom,prenom,mail FROM utilisateur where id = ?';
$stmt = $mysqlInstance->prepare($sql);
$stmt->execute([$id]);
if ($stmt) {
    header('location: ./ajouter_eleve_classe.php');
}
