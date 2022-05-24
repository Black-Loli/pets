<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Вход </title>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@1,400;1,700&display=swap"
          rel="stylesheet">
</head>
<body>
<div class="main">

    <div class="modal">
        <div class="tab-content">
            <div class="logo">
                <img src="pet-house.png">
                <h1>ПетроЛап</h1>
            </div>
            <form action="loginHandler.php" method="post">
                <input type="text" name="email_phone" placeholder="Email или телефон" required=""/>
                <input type="password" name="password" placeholder="Пароль" required="" minlength="6" maxlength="12"/>
                <h3>
                    <?php
                    echo $_SESSION['MESSAGE'] ?? "";
                    ?>
                </h3>
                <button id="entrance" type="submit" class="btn"> Войти </button>
                <a href="registration.php" class="reg"> Регистрация </a>
            </form>
        </div>
    </div>

</div>
</div>
</body>

<script src="jquery.min.js"></script>
<script>

</script>

</html>
