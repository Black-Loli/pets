<?php
session_start();
include 'bd_connection.php';
echo json_encode($_POST, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

try {
//    $query = $bdmr->prepare("UPDATE Users SET Name=?, Surname=?, Type=?, Login=?, Password=?")>exec();
    $userQuery = $bd->prepare("SELECT * FROM Users WHERE (Phone_number=? OR email=?) AND Password=?");
    $userQuery->execute([$_POST['email_phone'], $_POST['email_phone'], $_POST['password']]);
    $users = $userQuery->fetchAll(PDO::FETCH_OBJ);
    var_dump($users);
    if (count($users) == 0) {
        $_SESSION['MESSAGE'] = "Логин или пароль неверен";
        header("Location: entrance.php");
    } else {
        $_SESSION['MESSAGE'] = "";
        $_SESSION['user_name'] = $users[0]->name;
        $_SESSION['user_id'] = $users[0]->ID;

        header("Location: personal_account.php");
        //найден
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}