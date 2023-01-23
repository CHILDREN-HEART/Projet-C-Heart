<?php

require_once('../utils/database.php');

$id = $_GET["id"];
$sql = 'DELETE from classe WHERE id = ?';
$stmt = $mysqlInstance->prepare($sql);
$stmt->execute([$id]);
header('location: ./gestion_eleve.php');


?>