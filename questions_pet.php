<?php
session_start();
include 'bd_connection.php';
echo json_encode($_POST, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

$answers = array_filter($_POST, function ($value, $key) {
    return str_contains($key, "answer_");
}, ARRAY_FILTER_USE_BOTH);

foreach ($answers as $key => $answer) {
    $question_id = str_replace("answer_", "", $key);
    try {
        $bd->prepare("INSERT INTO Answers (ID_Question, ID_Pet, Answer) VALUES (?,?,?)")
            ->execute([
                $question_id,
                $_POST['pet_id'],
                $answer
            ]);
        if (in_array((int)$question_id, [1, 2, 3])) {
            $bd->prepare("UPDATE Pets SET Pets.Address=? WHERE Pets.ID=?")
                ->execute([
                    $answer,
                    $_POST['pet_id'],
                ]);
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
header("Location: personal_account_pet.php");
