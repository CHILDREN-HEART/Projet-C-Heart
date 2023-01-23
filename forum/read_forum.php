<?php

require_once("../utils/database.php");

$sql = "SELECT * FROM forum ORDER BY numero_article DESC";

$stmt = $mysqlInstance->query($sql);

if ($stmt === false) {
    die("Erreur");
}
