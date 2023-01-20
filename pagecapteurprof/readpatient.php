<?php
$host = "herogu.garageisep.com";
$dbname = "tw7TQUoQ7u_cheart";
$username = "HCjpLtsbkh_cheart";
$password = "dRQscVBnTH6HWDYK";
//$host = "localhost";
//$dbname = "c_heart";
//$username = "root";
//$password = "";
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les utilisateurs
  $sql = "SELECT * FROM utilisateur WHERE ID NOT IN (SELECT ID FROM classe)";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>
