<?php
include 'bd_connection.php';
echo json_encode($_POST, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

try {
//    $query = $bdmr->prepare("UPDATE Users SET Name=?, Surname=?, Type=?, Login=?, Password=?")>exec();
    $userQuery = $bd->prepare("SELECT * FROM Users WHERE (Phone_number=? OR email=?) AND Password=?");
    $userQuery->execute([$_POST['email_phone'], $_POST['email_phone'], $_POST['password']]);
    $user = $userQuery->fetch(PDO::FETCH_OBJ);
    if (count($user) == 0) {
        //не нашел
    } else {
        //найден
    }
    header("Location: personal_account.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}