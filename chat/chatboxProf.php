<?php

require_once("../utils/database.php");

if (empty(session_id())) session_start();

$profID = $_SESSION["user"];

$statement = $mysqlInstance->query("SELECT ID, nom, prenom, mail FROM utilisateur WHERE statut != 'prof'");
$students = $statement->fetchAll();

echo "<div id='chatbox'>
<span>Discussion avec l'utilisateur</span>
<select name='student' id='select_student_chat'>";

foreach ($students as $student) {
    echo "<option value='" . $student['ID'] . "'>" . $student['nom'] . " " . $student['prenom'] . " (" . $student['mail'] . ")</option>";
}

echo "</select>";

echo "<div id='messages_container'>
</div>";


echo "<div>
    <input type='text' id='message' placeholder='Message'>
    <input type='hidden' id='prof_id' value='" . $profID . "'>
    <input type='hidden' id='sent_by_student' value='0'>
    <button id='send'>Envoyer</button>
</div>";

echo "<script src='./script.js'>";

