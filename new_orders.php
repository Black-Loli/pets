<?php
session_start();
include 'bd_connection.php';
echo json_encode($_POST, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
//echo json_encode($_SESSION, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

try {
    $bd->prepare("INSERT INTO Service (ID_Pet, DateTimeStart, DateTimeEnd, Service_Type) VALUES (?,?,?,?)")
        ->execute([(int)$_POST['id_pet'], $_POST['DateTimeStart'], $_POST['DateTimeEnd'], (int)$_POST['service_type']]);
    $id = $bd->lastInsertId('ID');
    header("Location: /thanks_order.html");
} catch (PDOException $e) {
    echo $e->getMessage();
}