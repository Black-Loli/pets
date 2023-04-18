<?php
session_start();
include 'bd_connection.php';
echo json_encode($_POST, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

try {
    $bd->prepare("INSERT INTO Response_Executors (ID_Executor, ID_Service)
VALUES ((SELECT ID FROM Executor WHERE ID_user = ?), ?)")
        ->execute([$_SESSION['user_id'], $_POST['ID_Service']]);
    $id = $bd->lastInsertId('ID');
    header("Location: /thanks_response.html");
} catch (PDOException $e) {
    echo $e->getMessage();
}