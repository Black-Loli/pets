<?php
session_start();
include 'bd_connection.php';
echo json_encode($_POST, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

try {
    $bd->prepare("INSERT INTO Users (Name, Surname, Patronymic, Phone_number, email, Password, Type) VALUES (?,?,?,?,?,?,1)")
        ->execute([$_POST['name'], $_POST['surname'], $_POST['patronymic'], $_POST['number_phone'], $_POST['login'], $_POST['password']]);
    header("Location: personal_account_pet.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}