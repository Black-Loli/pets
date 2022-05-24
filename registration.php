<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Регистрация </title>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@1,400;1,700&display=swap"
          rel="stylesheet">
</head>
<body>
<div class="main">

    <div class="modal">

        <div>
            <div class="logo">
                <img src="pet-house.png">
                <h1>ПетроЛап</h1>
            </div>
            <form action="registrationHandler.php" method="post">
                <input type="text" name="name" placeholder="Введите имя" required="" minlength="2" maxlength="30"/>
                <input type="text" name="surname" placeholder="Введите фамилию" required="" minlength="2"
                       maxlength="30"/>
                <input type="text" name="patronymic" placeholder="Введите отчество" minlength="2" maxlength="30"/>
                <input type="text" name="number_phone" placeholder="Введите номер телефона" minlength="2"
                       maxlength="30"/>
                <input type="email" name="login" placeholder="Введите почту" required=""/>
                <input onkeyup="passEdit(this)" name="password" class="password_field" id="pass1" type="password"
                       placeholder="Придумайте пароль"
                       required="" minlength="6" maxlength="12"/>
                <input onkeyup="passEdit(this)" name="password_confirmation" class="password_field" id="pass2"
                       type="password"
                       placeholder="Подтвердите пароль"
                       required="" minlength="6" maxlength="12"/>
                <label for="pass2" id="password_check_label" class="d-none text-danger">Пароли не совпадают</label>

                <button type="submit" class="btn"> Зарегистрироваться</button>
            </form>
        </div>

    </div>
</div>
</div>
</body>

<script src="jquery.min.js"></script>
<script>

    $('.selector').click(function (event) {
        console.log(event.target.id)
        $('.tab-content .active').removeClass('active');
        $('.tab-content').children(`#${event.target.id}_content`).addClass('active');
    });

    function passwordEqualityCheck() {
        var passw = $("#pass1")
        var passwo = $("#pass2")
        if (passw.val() === passwo.val()) {
            $('.password_field').removeClass("error")
            $('#password_check_label').addClass('d-none');
        } else {
            $('.password_field').addClass("error")
            $('#password_check_label').removeClass('d-none');
        }
        return passw.val() === passwo.val()
    }

    function passEdit(element) {
        passwordEqualityCheck()
    }

    $('#loginForm').on('submit', function () {
        if (!passwordEqualityCheck()) {
            return false;
        }
    })

</script>

</html>
