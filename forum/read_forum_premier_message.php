<?php
//$host = "herogu.garageisep.com";
//$dbname = "tw7TQUoQ7u_cheart";
//$username = "HCjpLtsbkh_cheart";
//$password = "dRQscVBnTH6HWDYK";
$host = "localhost";
$dbname = "c_heart";
$username = "root";
$password = "";

$numero_article = filter_input(INPUT_GET, 'numero_article', FILTER_SANITIZE_NUMBER_INT);

$dsn = "mysql:host=$host;dbname=$dbname";
$sql = "SELECT * FROM forum WHERE numero_article = :numero_article";

try {
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':numero_article', $numero_article);
    $stmt->execute();
    if ($stmt === false) {
        die("Erreur");
    }

} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
