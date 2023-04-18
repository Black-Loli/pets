<?php
session_start();
include 'bd_connection.php';
echo json_encode($_POST, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

try {
    $bd->prepare("INSERT INTO Pets (Name, Pet_Type, ID_user) VALUES (?,?,?)")
        ->execute([$_POST['name'], $_POST['type_pet'], $_SESSION['user_id']]);
    $id = $bd->lastInsertId('ID');
    header("Location: pet_questions.php?pet_id=$id");
} catch (PDOException $e) {
    echo $e->getMessage();
}