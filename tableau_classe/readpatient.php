<?php

// récupérer tous les utilisateurs
$sql = "SELECT * FROM utilisateur WHERE ID NOT IN (SELECT ID FROM classe)";

$stmt = $mysqlInstance->query($sql);

if ($stmt === false) {
    die("Erreur");
}
