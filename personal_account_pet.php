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
    <link rel="stylesheet" href="src/css/Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@1,400;1,700&display=swap"
          rel="stylesheet">
</head>
<body>
<div class="top_menu menu">
    <div class="logotype">
        <svg width="75" height="80" viewBox="0 0 75 80" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M18.9197 11.7767C8.94049 17.7143 0.691008 22.7039 0.574584 22.8536C0.424896 23.0698 0.375 29.1072 0.375 51.7101C0.375 80.0677 0.375 80.2839 0.70764 80.6166C1.04028 80.9492 1.2565 80.9492 35.269 80.9492C54.0798 80.9492 70.5621 80.8993 71.876 80.8328C73.8885 80.7496 74.3209 80.6831 74.5871 80.417C74.8698 80.1342 74.8864 79.0532 74.8864 51.5438C74.8864 28.9409 74.8365 22.9035 74.6868 22.7039C74.5704 22.5542 66.3209 17.5979 56.3417 11.6935C41.5891 2.94506 38.113 0.949218 37.6307 0.949218C37.165 0.949218 33.639 2.99496 18.9197 11.7767ZM54.928 14.1883L72.2253 24.4503V51.2777V78.1218H67.901C64.8573 78.1218 63.5767 78.0719 63.5767 77.9388C63.5767 77.839 63.7929 76.9908 64.059 76.0594C64.7575 73.6311 65.1733 71.7018 65.6058 68.9742C65.9218 66.8785 65.9717 65.9139 65.9717 61.6561C65.9717 57.3983 65.9218 56.4336 65.6058 54.338C63.9259 43.5272 59.4519 33.9305 52.9322 27.1613C48.8573 22.9367 44.9488 20.3421 40.874 19.1613C37.4145 18.1634 35.8178 18.2299 31.9925 19.4939C29.3812 20.3754 28.6661 20.758 27.5683 21.8557C26.637 22.8037 26.5039 23.0532 25.4062 25.7309L24.5579 27.8099L20.4665 29.8889C18.2212 31.0365 16.2253 32.1176 16.0257 32.2839C15.0444 33.1821 14.5787 35.1945 15.0444 36.5584C15.2607 37.1904 19.0528 42.995 19.4686 43.3276C19.6182 43.4274 20.1006 43.5272 20.5496 43.5272H21.3646L20.7825 44.1758C20.4665 44.5251 20.0008 45.1738 19.7513 45.6228C19.4852 46.0719 18.8199 47.1862 18.2378 48.1176C16.0257 51.6935 14.5455 55.1363 13.6806 58.7122C12.3168 64.3671 12.3501 70.155 13.7804 75.7767C14.0964 76.9908 14.3459 78.022 14.3459 78.0552C14.3459 78.0885 11.8012 78.1218 8.69101 78.1218H3.03612V51.3609V24.5999L20.3002 14.2881C29.7804 8.61658 37.5642 3.95961 37.5808 3.95961C37.5974 3.94298 45.3979 8.55005 54.928 14.1883ZM36.7492 22.3546C37.8968 24.0345 39.2773 26.4461 39.5933 27.4108C40.059 28.7247 40.1421 29.3401 40.2752 32.5999C40.3916 35.4108 40.4083 35.5438 40.9239 36.575C42.1879 39.1696 45.1983 40.7164 47.9758 40.2174C50.2211 39.8349 52.1505 38.3713 53.0652 36.4087C53.3979 35.6935 53.5143 35.0947 53.5808 33.9139L53.6806 32.3505L54.3792 33.3484C56.192 35.9263 58.5039 40.2174 59.7347 43.3276C62.2794 49.7143 63.3937 56.1176 63.1941 63.0532C63.0611 67.7434 62.612 70.5708 61.2814 75.3276L60.5164 78.1218H55.7596H51.0195L50.7367 76.8245C50.1879 74.1634 49.0403 71.9347 47.2274 70.0386C45.8469 68.5584 44.1837 67.4274 42.4041 66.7122C41.2399 66.2465 40.9904 66.0469 40.2752 65.1654L39.4436 64.1509L39.8095 63.4523C40.6078 61.9222 40.3916 59.4607 39.3604 57.9638C39.0777 57.548 38.795 56.7496 38.5455 55.5189C38.0299 53.1072 37.348 51.7268 35.9675 50.3297C35.0361 49.3817 34.5372 49.0656 32.2752 47.918L29.6473 46.6041V44.6748V42.7455L32.2752 42.5459C35.9675 42.2631 35.8178 42.3297 36.7991 40.3505C37.7139 38.5376 37.8469 37.7559 37.2981 37.207C36.9654 36.8744 36.1172 36.758 35.5517 36.9742C35.402 37.0407 35.0195 37.6228 34.6868 38.2715C34.3708 38.9201 34.0881 39.469 34.0715 39.4856C34.0382 39.5355 21.5143 40.6997 21.1817 40.6997C21.0985 40.6997 20.7326 40.234 20.3667 39.6686L19.6848 38.6374L20.3999 38.022C21.7139 36.8577 22.4956 34.6789 22.1962 33.0324L22.0465 32.2673L24.4083 31.0864L26.77 29.9056L27.718 27.5272C28.7991 24.8328 29.2149 24.1342 30.0798 23.4523C30.7284 22.97 34.9031 21.4399 35.6515 21.4232C36.0008 21.4066 36.217 21.6062 36.7492 22.3546ZM42.2877 22.7205C45.5642 24.1342 48.5579 26.6457 49.6723 28.9076C50.4374 30.5043 50.77 31.8182 50.77 33.3484C50.77 34.3796 50.6868 34.7288 50.3209 35.4108C49.7887 36.3754 48.8407 37.1072 47.7097 37.39C46.1629 37.7725 44.3833 36.9076 43.5517 35.3775C43.086 34.5293 43.0694 34.3962 42.953 31.3193C42.7866 27.2777 42.4706 26.1966 40.4415 22.7538L39.9093 21.8557L40.3584 21.9721C40.6078 22.0386 41.4727 22.3713 42.2877 22.7205ZM19.3355 34.3629C19.2357 34.7455 18.9197 35.311 18.637 35.6436C18.138 36.1925 18.0881 36.2257 17.8885 35.943C17.4062 35.2777 17.7721 34.4295 18.8033 33.8972C19.1359 33.7143 19.4353 33.5979 19.4686 33.6311C19.5018 33.6644 19.4353 33.9804 19.3355 34.3629ZM27.0694 48.1342C27.1359 48.417 27.8511 48.8494 30.113 49.997C34.4374 52.2091 35.1026 52.9742 35.901 56.7663C36.1338 57.8473 36.4498 58.9284 36.5995 59.1446C37.3313 60.1592 37.4644 60.4586 37.4644 61.0407C37.4644 61.4066 37.348 61.9388 37.1983 62.2548C36.7326 63.2195 35.086 64.8661 34.0382 65.3983C33.1401 65.8473 32.9072 65.8972 31.3937 65.8972C29.8968 65.8972 29.6473 65.8473 28.8157 65.4315C28.3168 65.1654 27.5517 64.6332 27.1193 64.2174C26.454 63.602 26.2212 63.4856 25.6557 63.4856C24.7575 63.4856 24.3251 63.918 24.3251 64.8494C24.3251 65.4814 24.4083 65.6311 25.2565 66.4128C27.1525 68.1758 29.0985 68.8744 31.7929 68.7746C33.8552 68.6914 34.9197 68.3422 36.5829 67.1945C37.4977 66.5625 37.6972 66.496 37.8469 66.7122C37.9634 66.8453 38.3459 67.3276 38.6952 67.7933C39.2108 68.4586 39.5434 68.6914 40.192 68.9076C41.9218 69.4731 43.6349 70.5043 44.849 71.7184C46.5288 73.3817 47.4935 75.1779 48.0257 77.5896L48.1421 78.1218H32.7575H17.3896L16.874 76.2424C15.9592 73.0157 15.6765 71.2694 15.5767 68.1426C15.3937 62.9866 16.2253 58.6789 18.3209 54.0054C19.1359 52.2091 21.4478 48.1675 22.6453 46.4877C23.3937 45.4232 24.7076 44.4586 26.0382 44.0095L26.9031 43.7101L26.9363 45.7392C26.9696 46.8536 27.0195 47.9347 27.0694 48.1342Z"/>
            <path
                d="M30.4623 28.3754C30.0465 28.7912 29.98 28.9908 29.98 29.7226C29.98 30.4544 30.0465 30.654 30.4623 31.0698C30.8781 31.4856 31.0777 31.5522 31.8095 31.5522C32.5413 31.5522 32.7409 31.4856 33.1567 31.0698C33.5725 30.654 33.639 30.4544 33.639 29.7226C33.639 28.9908 33.5725 28.7912 33.1567 28.3754C32.7409 27.9596 32.5413 27.8931 31.8095 27.8931C31.0777 27.8931 30.8781 27.9596 30.4623 28.3754Z"/>
            <path
                d="M41.6058 43.0781C39.926 43.5605 38.7451 44.5417 38.0299 46.1052C37.7139 46.7538 37.6307 47.2195 37.6307 48.2673C37.6307 50.5459 37.847 50.8453 43.1526 56.1176C47.3272 60.2923 47.7596 60.6582 48.2752 60.6582C48.7908 60.6582 49.2233 60.2923 53.3979 56.1176C58.7201 50.8453 58.9197 50.5459 58.9197 48.2673C58.9031 45.6395 57.4395 43.7434 54.9114 43.0948C52.9322 42.5792 51.2856 43.1114 49.4062 44.8578L48.2752 45.8889L47.1609 44.8411C46.5289 44.2756 45.664 43.6436 45.1983 43.4274C44.1505 42.9451 42.6203 42.7954 41.6058 43.0781ZM43.7014 45.9388C44.0174 46.0054 44.7991 46.6374 45.9135 47.7351C47.4935 49.2985 47.6765 49.4316 48.2752 49.4316C48.8906 49.4316 49.0569 49.2985 50.5704 47.8183C52.3833 46.0386 52.6661 45.839 53.5975 45.8224C55.3937 45.8058 56.6245 47.7684 55.8428 49.4149C55.7097 49.6977 53.9467 51.5771 51.9343 53.5896L48.2752 57.2486L44.6162 53.5896C42.6037 51.5771 40.8407 49.6977 40.7077 49.4149C40.2253 48.4004 40.4582 47.1862 41.2565 46.4711C41.6224 46.1218 42.7534 45.6894 43.0361 45.7725C43.1193 45.8058 43.4187 45.8723 43.7014 45.9388Z"/>
            <path
                d="M29.6307 55.4856C29.2149 55.9014 29.1484 56.101 29.1484 56.8328C29.1484 57.5646 29.2149 57.7642 29.6307 58.18C30.0465 58.5958 30.2461 58.6623 30.9779 58.6623C31.7097 58.6623 31.9093 58.5958 32.3251 58.18C32.7409 57.7642 32.8074 57.5646 32.8074 56.8328C32.8074 56.101 32.7409 55.9014 32.3251 55.4856C31.9093 55.0698 31.7097 55.0033 30.9779 55.0033C30.2461 55.0033 30.0465 55.0698 29.6307 55.4856Z"/>
        </svg>
        <h1>ПетроЛап</h1>
    </div>
    <a class="button_entrance" href="/logOut.php"> Выйти </a>
</div>
<main>
    <div class="left_menu">
        <div class="person">
            <!--        <img src="user.png">-->
            <svg width="80" height="80" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M36.5611 0.880705C31.4467 1.49038 27.1925 2.72537 22.8758 4.85143C12.2717 10.0572 4.48285 19.7182 1.68324 31.1458C0.791748 34.7882 0.666626 35.9607 0.666626 40.8068C0.666626 45.653 0.791748 46.8411 1.68324 50.4679C5.34307 65.319 17.4799 77.0124 32.3695 80.0608C36.3108 80.858 41.6911 81.0769 45.6324 80.5923C63.7751 78.3568 78.1798 63.9434 80.432 45.8093C80.7448 43.2456 80.7448 38.2743 80.432 35.8512C79.9472 32.1463 79.0713 28.7852 77.7732 25.6118C76.5063 22.5165 74.9266 19.6869 74.301 19.4056C73.1749 18.8897 71.9081 19.6557 71.9081 20.8438C71.9081 21.0314 72.565 22.5008 73.3626 24.0798C76.1935 29.6607 77.3822 34.6163 77.3822 40.7443C77.3822 43.9021 77.2101 45.7624 76.6627 48.3887C75.1925 55.3922 71.736 61.7548 66.6842 66.7416C65.6989 67.7265 65.1671 68.1486 65.1358 67.9923C63.431 62.3332 61.695 59.2223 58.3636 55.9081C53.5933 51.1245 47.478 48.6232 40.6275 48.6232C33.7771 48.6232 27.6617 51.1245 22.8915 55.9081C19.5601 59.2223 17.824 62.3332 16.1192 67.9923C16.0879 68.1486 15.5562 67.7265 14.5708 66.7416C8.73701 60.9731 4.9677 53.188 4.02928 44.887C3.74776 42.4952 3.90416 36.9924 4.31081 34.71C5.01462 30.8488 5.89048 28.1599 7.62655 24.6113C13.085 13.4338 23.9237 5.75813 36.4829 4.22612C38.2658 4.00726 42.9736 4.00726 44.7878 4.22612C51.1847 4.99213 57.128 7.32141 62.3519 11.0889C63.431 11.8706 63.7751 12.0425 64.2756 12.0425C65.1515 12.0425 65.8084 11.3703 65.8084 10.5105C65.8084 10.1666 65.7614 9.76013 65.7145 9.63506C65.652 9.49437 64.9012 8.86906 64.0254 8.22811C59.0674 4.64821 53.6715 2.38145 47.2434 1.24026C45.7263 0.958869 44.6627 0.896338 41.2531 0.865072C38.9697 0.833806 36.8582 0.849439 36.5611 0.880705ZM43.6774 52.0781C51.6383 53.0942 58.6295 58.8627 61.2727 66.6009C61.5855 67.5389 62.1955 70.0401 62.2111 70.4466C62.2111 70.8531 58.348 73.198 55.7673 74.3548C50.9501 76.5278 46.1173 77.5439 40.7057 77.5595C34.6686 77.5595 29.5386 76.3714 24.2991 73.7764C22.782 73.0104 20.1544 71.4627 19.3724 70.8531L19.0127 70.556L19.2786 69.2585C21.2336 59.7069 29.3352 52.594 38.9853 51.9374C40.7526 51.8123 41.8787 51.8436 43.6774 52.0781Z"/>
                <path
                    d="M68.2482 14.0123C67.9198 14.3405 67.8416 14.575 67.8416 15.1691C67.8416 15.7631 67.9198 15.9976 68.2482 16.3259C68.5766 16.6542 68.8112 16.7324 69.4056 16.7324C69.9999 16.7324 70.2345 16.6542 70.563 16.3259C70.8914 15.9976 70.9696 15.7631 70.9696 15.1691C70.9696 14.575 70.8914 14.3405 70.563 14.0123C70.2345 13.684 69.9999 13.6058 69.4056 13.6058C68.8112 13.6058 68.5766 13.684 68.2482 14.0123Z"/>
                <path
                    d="M37.0772 17.7484C32.0879 19.0303 28.1935 22.9542 26.9267 27.941C26.3949 30.0514 26.3949 32.8028 26.9267 34.9132C28.2092 39.9314 32.1192 43.8396 37.1398 45.1214C39.2512 45.653 42.0039 45.653 44.1153 45.1214C49.1359 43.8396 53.0459 39.9314 54.3284 34.9132C54.8602 32.8028 54.8602 30.0514 54.3284 27.941C53.0459 22.9073 49.1515 19.0147 44.1153 17.7328C42.0195 17.2013 39.1574 17.2169 37.0772 17.7484ZM43.0987 20.8906C45.0225 21.2971 46.5865 22.1881 48.2287 23.8296C50.4809 26.0963 51.4193 28.3318 51.4193 31.4271C51.4193 34.5224 50.4809 36.7423 48.2131 39.0247C45.9765 41.2601 43.7087 42.2294 40.6275 42.2294C37.562 42.2294 35.2786 41.2601 33.0264 39.0247C30.7742 36.7579 29.8358 34.5224 29.8358 31.4271C29.8358 28.3318 30.7742 26.0963 33.0264 23.8296C35.8729 21.0001 39.0792 20.0621 43.0987 20.8906Z"/>
            </svg>
            <div>
                <?php
                echo "<h1>$userQueryResult->Surname $userQueryResult->Name</h1>
        <h1>$userQueryResult->Patronymic</h1>";
                ?>
            </div>

        </div>
        <ul>
            <li>
                <input type="radio" name="profile_selector" id="order_con" class="con_selector" checked>
                <label for="order_con" class="con_selector_label">
                    Мои заказы
                </label>
            </li>
            <li>
                <input type="radio" name="profile_selector" id="card_con" class="con_selector">
                <label for="card_con" class="con_selector_label">
                    Карточки питомцев
                </label>
            </li>
            <li>Чат с менеджером</li>
            <li>Настройки аккаунта</li>
        </ul>
    </div>


    <div class="tab-content">
        <div id="order_con_content" class="content active">
            <div class="orders">
                <button type="button" id="modal_open_new_orders"> Новый заказ</button>
                <?php
                $user_id = $_SESSION['user_id'];
                $ordersArray = $bd->query("SELECT *,
                    DATE_FORMAT(TIME(DateTimeStart), '%H:%i')    AS TimeStart,
                    DATE_FORMAT(DATE(DateTimeStart), '%d %M %Y') AS DateStart,
                    DATE_FORMAT(TIME(DateTimeEnd), '%H:%i')      AS TimeEnd,
                    DATE_FORMAT(DATE(DateTimeEnd), '%d %M %Y')   AS DateEnd,
                    Service.ID                                   as ServiceID,
                    Order_Status.Description                     as Order_Status,
                    Type_Service.Description                     as Type_Service
                FROM Service
                    LEFT JOIN Type_Service on Type_Service.ID = Service.Service_Type
                    LEFT JOIN Pets on Pets.ID = Service.ID_Pet
                    LEFT JOIN Order_Status on Order_Status.ID = Service.ID_Order_Status
                WHERE Pets.ID_user = $user_id and Service.ID > 0
                ORDER BY DateTimeStart")->fetchAll(PDO::FETCH_OBJ);

                /*$breeds = $bd->query("Select * FROM Pets Left JOIN Answers on Pets.ID = Answers.ID_Pet WHERE Answers.ID_Question IN (10,11) AND Pets.ID_user=$user_id)")->fetchAll(PDO::FETCH_OBJ);*/
                /*$addresses = $bd->query("SELECT * FROM Answers LEFT JOIN Pets on Pets.ID = Answers.ID_Pet LEFT JOIN Questions on Questions.ID = Answers.ID_Question WHERE Questions.ID IN (1,2,3) AND Answers.ID_Pet IN (SELECT Pets.ID from Pets WHERE ID_user=$user_id)")->fetchAll(PDO::FETCH_OBJ);
                $breeds = $bd->query("SELECT * FROM Answers LEFT JOIN Pets on Pets.ID = Answers.ID_Pet LEFT JOIN Questions on Questions.ID = Answers.ID_Question WHERE Questions.ID IN (10,11) AND Answers.ID_Pet IN (SELECT Pets.ID from Pets WHERE ID_user=$user_id)")->fetchAll(PDO::FETCH_OBJ);
                */
                foreach ($ordersArray as $singleOrder) {
                    echo "<h2 class='date'> {$singleOrder->DateStart} </h2>";
                    echo "<div class='application'>";
                    echo "<div class='application__body'>";
                    echo "<h1>{$singleOrder->Name} - {$singleOrder->Type_Service}</h1>";
                    if ($singleOrder->ID_Order_Status > 0) {
                        echo "<h1>$singleOrder->Order_Status</h1>";
                    } else {
                        echo "<h1>Подбор исполнителя</h1>";
                    }
                    echo "</div>";
                    echo "<div class='application__footer'>";
                    echo "<h1>в $singleOrder->TimeStart, $singleOrder->Address</h1>";
                    echo "<a id='modal_open_order' data-pet-id='{$singleOrder->ID_Pet}' data-order-id='{$singleOrder->ServiceID}'>Смотреть подробнее</a>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>


                <div class="overlay_modal" id="overlay_modal_new_orders"></div>
                <div class="modal" id="modal_new_orders">
                    <div class="modal_header">
                        <h1>Новый заказ</h1>
                        <svg id="modal_close_new_orders" viewBox="0 0 43 43" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M41.3334 1.3335L1.33337 41.3335M1.33342 1.3335L41.3334 41.3335" stroke="#006270"
                                  stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>

                    <div class="modal_body">
                        <form action="/new_orders.php" method="post">
                            <select name="service_type" class="dol" required="">
                                <option class="op" selected>Какая услуга?</option>
                                <?php
                                session_start();
                                include 'bd_connection.php';
                                try {
                                    $orders = $bd->query('SELECT * FROM Type_Service ');
                                    while ($type_orders = $orders->fetch(PDO::FETCH_OBJ)) {
                                        echo "<option value='{$type_orders->ID}' class='option'>{$type_orders->Description}</option>";
                                    }
                                } catch (PDOExeption $y) {
                                    echo $y->getMessage();
                                }
                                ?>
                            </select>

                            <select name="id_pet" class="dol" required="">
                                <option class="op" selected>С кем из ваших питомцев?</option>
                                <?php
                                session_start();
                                include 'bd_connection.php';
                                try {
                                    $pet = $bd->query('SELECT * FROM Pets ');
                                    while ($pets = $pet->fetch(PDO::FETCH_OBJ)) {
                                        echo "<option value='{$pets->ID}' class='option'>{$pets->Name}</option>";
                                    }
                                } catch (PDOExeption $y) {
                                    echo $y->getMessage();
                                }
                                ?>
                            </select>


                            <h1>Дата и время начала услуги</h1>
                            <input type="datetime-local" name="DateTimeStart" required=""/>
                            <h1>Дата и время конца услуги</h1>
                            <input type="datetime-local" name="DateTimeEnd" required=""/>
                            <button type="submit" class="btn"> Заказать</button>
                        </form>
                    </div>
                </div>

                <div class="overlay_modal" id="overlay_modal_order"></div>
                <div class="modal" id="modal_order">
                    <div class="modal_header">
                        <h1>Заказ на питомца</h1>
                        <svg id="modal_close_order" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M41.3334 1.3335L1.33337 41.3335M1.33342 1.3335L41.3334 41.3335" stroke="#006270"
                                  stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>

                    <div class="modal_body modal_body_order">
                        <?php
                        $user_id = $_SESSION['user_id'];
                        $data = $bd->query("Select *,
                               DATE_FORMAT(TIME(DateTimeStart), '%H:%i')    AS TimeStart,
                               DATE_FORMAT(DATE(DateTimeStart), '%d %M %Y') AS DateStart,
                               DATE_FORMAT(TIME(DateTimeEnd), '%H:%i')      AS TimeEnd,
                               DATE_FORMAT(DATE(DateTimeEnd), '%d %M %Y')   AS DateEnd,
                               Service.ID                                   as ServiceID
                        FROM Pets
                                Left JOIN Answers on Pets.ID = Answers.ID_Pet
                                Left JOIN Questions on Answers.ID_Question = Questions.ID
                                Left JOIN Service on Pets.ID = Service.ID_Pet
                                LEFT JOIN Type_Service on Type_Service.ID = Service.Service_Type
                        WHERE Pets.ID_user = $user_id and Service.ID > 0")->fetchAll(PDO::FETCH_OBJ);
                        $order_question = array();
                        foreach ($data as $element) {
                            $order_question[$element->ServiceID][] = $element;
                        }
                        foreach ($order_question as $ServiceID => $orders) {
                            echo "<div class='pet_order' id='$ServiceID' style='display: none'>";
                            echo "<h1>{$orders[0]->DateStart}</h1>";
//                            echo "<h1>{$orders[0]->ID_Executor}</h1>";
                            echo "<h1>{$orders[0]->Description} {$orders[0]->TimeStart}</h1>";
                            echo "<h1>{$orders[0]->Name}</h1>";
                            foreach ($orders as $order) {
                                echo "<h2>{$order->Text_Question}</h2>";
                                echo "<h1>{$order->Answer}</h1>";
                            }
                            echo "</div>";
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
        <div id="card_con_content" class="content">
            <div class="pets">
                <button type="button" id="js_modal_open"> Новый питомец</button>
                <?php
                $user_id = $_SESSION['user_id'];
                $ordersArray = $bd->query("Select ID_Pet,
                        ID_user,
                        Pets.Name,
                        (SELECT Answer from Answers WHERE ID_Question IN (1, 2, 3) and ID_Pet=Pets.ID LIMIT 1) as address,
                        (SELECT Answer from Answers WHERE ID_Question IN (10, 11) and ID_Pet=Pets.ID LIMIT 1)  as breed
                        FROM Pets
                        Left JOIN Answers on Pets.ID = Answers.ID_Pet
                        WHERE Answers.ID_Question IN (1, 2, 3)
                        AND Pets.ID_user =$user_id")->fetchAll(PDO::FETCH_OBJ);
                /*$breeds = $bd->query("Select * FROM Pets Left JOIN Answers on Pets.ID = Answers.ID_Pet WHERE Answers.ID_Question IN (10,11) AND Pets.ID_user=$user_id)")->fetchAll(PDO::FETCH_OBJ);*/
                /*$addresses = $bd->query("SELECT * FROM Answers LEFT JOIN Pets on Pets.ID = Answers.ID_Pet LEFT JOIN Questions on Questions.ID = Answers.ID_Question WHERE Questions.ID IN (1,2,3) AND Answers.ID_Pet IN (SELECT Pets.ID from Pets WHERE ID_user=$user_id)")->fetchAll(PDO::FETCH_OBJ);
                $breeds = $bd->query("SELECT * FROM Answers LEFT JOIN Pets on Pets.ID = Answers.ID_Pet LEFT JOIN Questions on Questions.ID = Answers.ID_Question WHERE Questions.ID IN (10,11) AND Answers.ID_Pet IN (SELECT Pets.ID from Pets WHERE ID_user=$user_id)")->fetchAll(PDO::FETCH_OBJ);
                */
                foreach ($ordersArray as $singleOrder) {
                    echo "<div class='application'>";
                    echo "<h1>{$singleOrder->Name} - {$singleOrder->breed}</h1>";
                    echo "<div class='application__footer'>";
                    echo "<h1>$singleOrder->address</h1>";
                    echo "<a id='modal_open' data-pet-id='{$singleOrder->ID_Pet}'>Смотреть подробнее</a>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
                <div class="overlay_modal" id="overlay_modal"></div>
                <div class="modal" id="modal_new">
                    <div class="modal_header">
                        <h1>Добавление нового питомца</h1>
                        <svg id="js_modal_close" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M41.3334 1.3335L1.33337 41.3335M1.33342 1.3335L41.3334 41.3335" stroke="#006270"
                                  stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>

                    <div class="modal_body">
                        <form action="/new_pet.php" method="post">
                            <input type="text" name="name" placeholder="Имя питомца" required=""/>
                            <select name="type_pet" class="dol" required="">
                                <option class="op" selected>Кто у вас?</option>
                                <?php
                                session_start();
                                include 'bd_connection.php';
                                try {
                                    $type = $bd->query('SELECT * FROM Types_pets ');
                                    while ($type_pets = $type->fetch(PDO::FETCH_OBJ)) {
                                        echo "<option value='{$type_pets->ID}' class='option'>{$type_pets->Description}</option>";
                                    }
                                } catch (PDOExeption $y) {
                                    echo $y->getMessage();
                                }
                                ?>
                            </select>
                            <button type="submit" class="btn"> Далее</button>
                        </form>
                    </div>
                </div>

                <div class="overlay_modal" id="overlay_modal_pet"></div>
                <div class="modal" id="modal">
                    <div class="modal_header">
                        <h1>Питомец</h1>
                        <svg id="modal_close" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M41.3334 1.3335L1.33337 41.3335M1.33342 1.3335L41.3334 41.3335" stroke="#006270"
                                  stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>

                    <div class="modal_body">
                        <?php
                        $user_id = $_SESSION['user_id'];
                        $data = $bd->query("Select *
                        FROM Pets
                                Left JOIN Answers on Pets.ID = Answers.ID_Pet
                            Left JOIN  Questions on Answers.ID_Question = Questions.ID
                        WHERE Pets.ID_user = $user_id")->fetchAll(PDO::FETCH_OBJ);
                        $grouped_question = array();
                        foreach ($data as $element) {
                            $grouped_question[$element->ID_Pet][] = $element;
                        }
                        foreach ($grouped_question as $pet_id => $questions) {
                            echo "<div class='pet_questions' id='$pet_id' style='display: none'>";
                            echo "<h1>{$questions[0]->Name}</h1>";
                            foreach ($questions as $question) {
                                echo "<h2>{$question->Text_Question}</h2>";
                                echo "<h1>{$question->Answer}</h1>";
                            }
                            echo "</div>";
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
        <!--        <div id="_content">-->

    </div>
    </div>
</main>
</body>

<script src="src/js/jquery.min.js"></script>
<script>
    $('#js_modal_open,#overlay_modal,#js_modal_close').click(function (event) {
        $('#overlay_modal').toggleClass("active")
        $('#modal_new').toggleClass("active")
    });

    $('#modal_open,#overlay_modal_pet,#modal_close').click(function (event) {
        console.log($(`.modal_body div#${event.target.dataset.petId}`))
        $('#overlay_modal_pet').toggleClass("active")
        $('#modal').toggleClass("active")
        if (event.target.id === 'modal_open') {
            $('.modal_body div.pet_questions').hide();
            $(`.modal_body div#${event.target.dataset.petId}`).show();
        }
    });

    $('.con_selector').click(function (event) {
        console.log(event.target.id)
        $('.tab-content .active').removeClass('active');
        $('.tab-content').children(`#${event.target.id}_content`).addClass('active');
    });

    $('#modal_open_new_orders,#overlay_modal_new_orders,#modal_close_new_orders').click(function (event) {
        $('#overlay_modal_new_orders').toggleClass("active")
        $('#modal_new_orders').toggleClass("active")
    });

    $('#modal_open_order,#overlay_modal_order,#modal_close_order').click(function (event) {
        $('#overlay_modal_order').toggleClass("active")
        $('#modal_order').toggleClass("active")
        if (event.target.id === 'modal_open_order') {
            $('.modal_body_order div.pet_order').hide();
            $(`.modal_body_order div#${event.target.dataset.orderId}`).show();
        }
    });
</script>

</html>
