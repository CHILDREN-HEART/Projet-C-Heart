<?php

require_once("../utils/database.php");

session_start();

$statement = $mysqlInstance->prepare("SELECT ID, nom, prenom, mail FROM utilisateur WHERE statut = 'prof' LIMIT 1");
$statement->execute();
$prof = $statement->fetch();

$studentID = $_SESSION["user"];
$profID = $prof["ID"];

var_dump($studentID, $profID, "");
exit;

echo "<div class='chatbox'>
<span>Discussion avec le prof</span>
<div class='chat-logs'>";

echo "<div id='messages_container'>
</div>";

echo "<div>
<input type='text' id='message' placeholder='Message'>
<input type='hidden' id='student_id' value='" . $studentID . "'>
<input type='hidden' id='prof_id' value='" . $profID . "'>
<input type='hidden' id='sent_by_student' value='1'>
<button id='send'>Envoyer</button>
</div>";

echo "<script src='./script.js'>";

