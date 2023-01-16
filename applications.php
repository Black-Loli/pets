<?php
session_start();
include 'bd_connection.php';
echo json_encode($_POST, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

try {
    $bd->prepare("INSERT INTO Applications (Name, Numder, ID_Service_Name) VALUES (?,?,?)")
        ->execute([$_POST['name'], $_POST['number_phone'], $_POST['type']]);
    header("Location: thanks.html");
} catch (PDOException $e) {
    echo $e->getMessage();
}