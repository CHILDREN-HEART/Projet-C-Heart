<?php

require_once("../utils/database.php");

$studentID = 28;
$profID = 27;
$statement = $mysqlInstance->query("SELECT ID, nom, prenom, mail FROM classe");
$students = $statement->fetchAll();

echo "<div class='chatbox'>
<span>Discussion avec l'élève</span>
<select name='student' id='select_student_chat'>";

foreach ($students as $student) {
    echo "<option value='" . $student['ID'] . "'>" . $student['nom'] . " " . $student['prenom'] . " (" . $student['mail'] . ")</option>";
}

echo "</select>";

echo "<div class='chat-logs'>";

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

