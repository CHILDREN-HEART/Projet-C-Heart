<?php

require_once('../utils/database.php');

$stmt = $mysqlInstance->query("SELECT * FROM classe");

if ($stmt === false) {
    die("Erreur");
}
