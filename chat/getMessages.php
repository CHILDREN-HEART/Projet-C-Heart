<?php

require_once("../utils/database.php");

$json = trim(file_get_contents('php://input'));
$donnees = json_decode($json, true);

if (isset($donnees['student_id']) && isset($donnees['prof_id'])) {

    $studentID = $donnees['student_id'];
    $profID = $donnees['prof_id'];

    $statement = $mysqlInstance->prepare("SELECT id, student_id, prof_id, message, created_at, sent_by_student FROM chat_messages WHERE student_id = :student_id AND prof_id = :prof_id");
    $statement->execute([
        "student_id" => $studentID,
        "prof_id" => $profID
    ]);

    $data = $statement->fetchAll();

    echo json_encode($data);
}