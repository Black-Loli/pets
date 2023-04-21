<?php
session_start();
include 'bd_connection.php';
echo json_encode($_POST, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

try {
    $bd->prepare("UPDATE Service SET ID_Executor=? WHERE ID=?")
        ->execute([$_POST['ID_Executor'], $_POST['ID_Service']]);
    $id = $bd->lastInsertId('ID');
    header("Location: /thanks_purpose.html");
} catch (PDOException $e) {
    echo $e->getMessage();
}