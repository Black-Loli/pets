<?php
session_start();
include 'bd_connection.php';
echo json_encode($_POST, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

try {
    $bd->prepare("UPDATE Service SET ID_Order_Status=3 WHERE ID=?")
        ->execute([ $_POST['ID_Service']]);
    $id = $bd->lastInsertId('ID');
    header("Location: /thanks_order_status_3.html");
} catch (PDOException $e) {
    echo $e->getMessage();
}