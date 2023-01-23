<?php

$numero_article = filter_input(INPUT_GET, 'numero_article', FILTER_SANITIZE_NUMBER_INT);

$dsn = "mysql:host=$host;dbname=$dbname";
$sql = "SELECT * FROM forum WHERE numero_article = :numero_article";

$stmt = $mysqlInstance->prepare($sql);
$stmt->bindValue(':numero_article', $numero_article);
$stmt->execute();
if ($stmt === false) {
    die("Erreur");
}
