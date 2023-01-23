<?php

require_once('../utils/database.php');

// récupérer tous les utilisateurs
$sql = "SELECT * FROM classe";

$stmt = $mysqlInstance->query($sql);

if ($stmt === false) {
    die("Erreur");
}