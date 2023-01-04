<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Регистрация </title>
    <link rel="stylesheet" href="../src/css/Style.css">
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
                <svg width="108" height="116" viewBox="0 0 108 116" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.658 16.0355C12.3129 24.5708 0.454262 31.7434 0.286902 31.9585C0.0717256 32.2693 0 40.9481 0 73.4398C0 114.204 0 114.515 0.47817 114.993C0.956341 115.471 1.26715 115.471 50.1601 115.471C77.2006 115.471 100.894 115.399 102.783 115.304C105.676 115.184 106.297 115.088 106.68 114.706C107.086 114.299 107.11 112.745 107.11 73.2007C107.11 40.7091 107.038 32.0303 106.823 31.7434C106.656 31.5282 94.7973 24.4034 80.4522 15.9159C59.2453 3.34003 54.2484 0.471009 53.5551 0.471009C52.8857 0.471009 47.817 3.41176 26.658 16.0355ZM78.42 19.5022L103.285 34.2538V72.8182V111.407H97.0686C92.6933 111.407 90.8524 111.335 90.8524 111.144C90.8524 111 91.1632 109.781 91.5457 108.442C92.5499 104.951 93.1476 102.178 93.7692 98.2569C94.2235 95.2444 94.2952 93.8577 94.2952 87.7371C94.2952 81.6165 94.2235 80.2298 93.7692 77.2174C91.3545 61.6768 84.9231 47.8816 75.5509 38.1508C69.6933 32.0781 64.0748 28.3483 58.2173 26.6508C53.2443 25.2163 50.9491 25.312 45.4501 27.129C41.6965 28.3962 40.6684 28.9461 39.0904 30.524C37.7516 31.8868 37.5603 32.2454 35.9823 36.0947L34.763 39.0833L28.8815 42.0718C25.6538 43.7215 22.7848 45.2756 22.4979 45.5147C21.0873 46.8057 20.4179 49.6987 21.0873 51.6592C21.3981 52.5677 26.8493 60.9118 27.447 61.3899C27.6622 61.5334 28.3555 61.6768 29.001 61.6768H30.1726L29.3358 62.6093C28.8815 63.1113 28.2121 64.0438 27.8534 64.6893C27.4709 65.3348 26.5146 66.9367 25.6778 68.2756C22.4979 73.4159 20.3701 78.365 19.1268 83.5053C17.1663 91.6342 17.2141 99.9544 19.2703 108.035C19.7245 109.781 20.0832 111.263 20.0832 111.311C20.0832 111.359 16.4252 111.407 11.9543 111.407H3.82536V72.9377V34.4689L28.6424 19.6456C42.2703 11.4928 53.4595 4.79845 53.4834 4.79845C53.5073 4.77454 64.7204 11.3972 78.42 19.5022ZM52.2879 31.2413C53.9376 33.656 55.922 37.1228 56.3763 38.5095C57.0457 40.3982 57.1653 41.2829 57.3565 45.9689C57.5239 50.0095 57.5478 50.2007 58.289 51.6831C60.106 55.4128 64.4335 57.6363 68.4262 56.919C71.6538 56.3691 74.4272 54.2652 75.7422 51.444C76.2204 50.4159 76.3877 49.5552 76.4834 47.8577L76.6268 45.6103L77.631 47.0448C80.237 50.7506 83.5603 56.919 85.3295 61.3899C88.9875 70.5708 90.5894 79.7756 90.3025 89.7454C90.1112 96.4876 89.4657 100.552 87.553 107.39L86.4532 111.407H79.6154H72.8014L72.395 109.542C71.606 105.716 69.9563 102.513 67.3503 99.787C65.3659 97.6592 62.975 96.0334 60.4168 95.0053C58.7432 94.3359 58.3846 94.049 57.3565 92.7818L56.1611 91.3234L56.6871 90.3192C57.8347 88.1197 57.5239 84.5812 56.0416 82.4294C55.6351 81.8317 55.2287 80.6841 54.8701 78.9149C54.1289 75.4481 53.1486 73.4637 51.1642 71.4554C49.8254 70.0926 49.1081 69.6384 45.8565 67.9887L42.079 66.0999V63.3265V60.5531L45.8565 60.2662C51.1642 59.8598 50.9491 59.9554 52.3597 57.1103C53.6746 54.5043 53.8659 53.3806 53.0769 52.5916C52.5987 52.1134 51.3794 51.9461 50.5665 52.2569C50.3513 52.3525 49.8015 53.1893 49.3233 54.1217C48.869 55.0542 48.4626 55.8431 48.4387 55.8671C48.3908 55.9388 30.3877 57.6124 29.9096 57.6124C29.79 57.6124 29.264 56.9429 28.738 56.1301L27.7578 54.6477L28.7859 53.7631C30.6746 52.0895 31.7983 48.9575 31.368 46.5906L31.1528 45.4908L34.5478 43.7933L37.9428 42.0957L39.3056 38.6768C40.8597 34.8036 41.4574 33.7995 42.7006 32.8192C43.6331 32.1259 49.6341 29.9263 50.71 29.9024C51.2121 29.8785 51.5229 30.1654 52.2879 31.2413ZM60.2495 31.7673C64.9595 33.7995 69.263 37.4097 70.8649 40.6612C71.9647 42.9565 72.4428 44.8452 72.4428 47.0448C72.4428 48.5271 72.3233 49.0292 71.7973 50.0095C71.0322 51.3962 69.6694 52.4481 68.0437 52.8546C65.8202 53.4045 63.2619 52.1612 62.0665 49.9617C61.3971 48.7423 61.3732 48.5511 61.2058 44.128C60.9667 38.3182 60.5125 36.7641 57.5956 31.8151L56.8306 30.524L57.4761 30.6914C57.8347 30.787 59.078 31.2652 60.2495 31.7673ZM27.2557 48.5032C27.1123 49.0531 26.658 49.866 26.2516 50.3442C25.5343 51.1332 25.4626 51.181 25.1757 50.7745C24.4823 49.8182 25.0083 48.5989 26.4906 47.8338C26.9688 47.5708 27.3992 47.4034 27.447 47.4513C27.4948 47.4991 27.3992 47.9533 27.2557 48.5032ZM38.3732 68.2995C38.4688 68.7059 39.4969 69.3276 42.7484 70.9772C48.9647 74.1571 49.921 75.2569 51.0686 80.708C51.4033 82.2621 51.8576 83.8161 52.0728 84.1269C53.1247 85.5854 53.316 86.0157 53.316 86.8525C53.316 87.3785 53.1486 88.1436 52.9335 88.5978C52.264 89.9845 49.8971 92.3515 48.3908 93.1165C47.0998 93.7621 46.7651 93.8338 44.5894 93.8338C42.4376 93.8338 42.079 93.7621 40.8836 93.1644C40.1663 92.7818 39.0665 92.0167 38.4449 91.419C37.4886 90.5344 37.1538 90.3671 36.341 90.3671C35.0499 90.3671 34.4283 90.9887 34.4283 92.3276C34.4283 93.2361 34.5478 93.4513 35.7671 94.575C38.4927 97.1093 41.29 98.1134 45.1632 97.97C48.1279 97.8504 49.658 97.3483 52.0489 95.6987C53.3638 94.7901 53.6507 94.6945 53.8659 95.0053C54.0333 95.1966 54.5832 95.8899 55.0852 96.5594C55.8264 97.5157 56.3046 97.8504 57.237 98.1612C59.7235 98.9741 62.1861 100.456 63.9314 102.202C66.3461 104.593 67.7328 107.175 68.4979 110.641L68.6653 111.407H46.5499H24.4584L23.7173 108.705C22.4023 104.067 21.9958 101.556 21.8524 97.0614C21.5894 89.6498 22.7848 83.4575 25.7973 76.7392C26.9688 74.1571 30.2921 68.3473 32.0135 65.9325C33.0894 64.4024 34.9782 63.0157 36.8908 62.3702L38.1341 61.9398L38.1819 64.8567C38.2297 66.4585 38.3015 68.0126 38.3732 68.2995Z"/>
                    <path d="M43.2505 39.8962C42.6528 40.4939 42.5571 40.7808 42.5571 41.8328C42.5571 42.8848 42.6528 43.1717 43.2505 43.7694C43.8482 44.3671 44.1351 44.4627 45.1871 44.4627C46.239 44.4627 46.5259 44.3671 47.1237 43.7694C47.7214 43.1717 47.817 42.8848 47.817 41.8328C47.817 40.7808 47.7214 40.4939 47.1237 39.8962C46.5259 39.2985 46.239 39.2029 45.1871 39.2029C44.1351 39.2029 43.8482 39.2985 43.2505 39.8962Z"/>
                    <path d="M59.2693 61.0313C56.8546 61.7247 55.157 63.1353 54.129 65.3827C53.6747 66.3151 53.5552 66.9845 53.5552 68.4908C53.5552 71.7662 53.866 72.1966 61.4928 79.7756C67.4938 85.7766 68.1155 86.3026 68.8566 86.3026C69.5978 86.3026 70.2194 85.7766 76.2205 79.7756C83.8712 72.1966 84.1581 71.7662 84.1581 68.4908C84.1342 64.7132 82.0302 61.9877 78.3961 61.0552C75.551 60.3141 73.1841 61.0791 70.4824 63.5895L68.8566 65.0719L67.2548 63.5656C66.3462 62.7527 65.103 61.8442 64.4336 61.5334C62.9273 60.84 60.7277 60.6249 59.2693 61.0313ZM62.2818 65.1436C62.736 65.2392 63.8598 66.1477 65.4616 67.7257C67.7329 69.9731 67.9959 70.1644 68.8566 70.1644C69.7412 70.1644 69.9803 69.9731 72.156 67.8452C74.762 65.287 75.1685 65.0001 76.5074 64.9762C79.0895 64.9523 80.8587 67.7735 79.735 70.1405C79.5437 70.5469 77.0094 73.2486 74.1165 76.1415L68.8566 81.4014L63.5968 76.1415C60.7038 73.2486 58.1695 70.5469 57.9783 70.1405C57.2849 68.682 57.6196 66.9367 58.7672 65.9087C59.2932 65.4066 60.919 64.785 61.3254 64.9045C61.445 64.9523 61.8753 65.0479 62.2818 65.1436Z"/>
                    <path d="M42.055 78.8671C41.4573 79.4648 41.3617 79.7517 41.3617 80.8037C41.3617 81.8556 41.4573 82.1425 42.055 82.7402C42.6528 83.338 42.9397 83.4336 43.9916 83.4336C45.0436 83.4336 45.3305 83.338 45.9282 82.7402C46.5259 82.1425 46.6216 81.8556 46.6216 80.8037C46.6216 79.7517 46.5259 79.4648 45.9282 78.8671C45.3305 78.2694 45.0436 78.1737 43.9916 78.1737C42.9397 78.1737 42.6528 78.2694 42.055 78.8671Z"/>
                </svg>
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

<script src="../src/js/jquery.min.js"></script>
<script>

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
