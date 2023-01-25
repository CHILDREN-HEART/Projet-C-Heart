<?php

require_once('../utils/database.php');

$json = trim(file_get_contents('php://input'));
$donnees = json_decode($json, true);

if (isset($donnees["message"]) && isset($donnees["student_id"]) && isset($donnees["prof_id"]) && isset($donnees["sent_by_student"])) {

    $message = $donnees["message"];
    $studentID = $donnees["student_id"];
    $profID = $donnees["prof_id"];
    $sent_by_student = $donnees["sent_by_student"];

    $statement = $mysqlInstance->prepare("INSERT INTO chat_messages (student_id, prof_id, message, sent_by_student) VALUES (:student_id, :prof_id, :message, :sent_by_student)");
    $success = $statement->execute([
        'student_id' => $studentID,
        'prof_id' => $profID,
        'message' => $message,
        'sent_by_student' => $sent_by_student
    ]);

    if ($success) {
        http_response_code(200);
    } else {
        http_response_code(303);
    }

} else {
    http_response_code(400);
}
