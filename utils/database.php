<?php
$host = "herogu.garageisep.com";
$dbname = "tw7TQUoQ7u_cheart";
$username = "HCjpLtsbkh_cheart";
$password = "dRQscVBnTH6HWDYK";

/**
 * @var PDO $mysqlInstance
 */

$mysqlInstance = null;
try {
    $mysqlInstance = new PDO("mysql:dbname=$dbname;host=$host", $username, $password);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit();
}

var_export($mysqlInstance);