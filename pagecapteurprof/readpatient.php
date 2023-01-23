<?php

require_once("../utils/database.php");
// récupérer tous les utilisateurs
$sql = "SELECT * FROM utilisateur WHERE ID NOT IN (SELECT ID FROM classe)";

try {

    $stmt = $mysqlInstance->query($sql);

    if ($stmt === false) {
        die("Erreur");
    }

} catch (PDOException $e) {
    echo $e->getMessage();
}

