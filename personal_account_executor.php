<!DOCTYPE html>
<?php
session_start();
include 'bd_connection.php';
$userQuery = $bd->prepare("SELECT * FROM Users WHERE ID=?");
$userQuery->execute([$_SESSION['user_id']]);
$userQueryResult = $userQuery->fetch(PDO::FETCH_OBJ);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Личный кабинет </title>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
<div class="top_menu menu">
    <div class="logotype">
        <img src="pet-house.png">
        <h1>ПетроЛап</h1>
    </div>
    <a class="button_entrance"> Выйти </a>
</div>
<div class="left_menu">
    <div class="person">
        <img src="user.png">
        <div>
            <?php
            echo "<h1>$userQueryResult->Surname $userQueryResult->Name</h1>
        <h1>$userQueryResult->Patronymic</h1>";
            ?>
        </div>

    </div>
    <ul>
        <li>Заказы</li>
        <li>Карточки питомцев</li>
        <li>Чат с менеджером</li>
        <li>Настройки аккаунта</li>
    </ul>
</div>

</body>

<script src="jquery.min.js"></script>
<script>

</script>

</html>
