<!DOCTYPE html>
<?php
session_start();
include 'bd_connection.php';
$pet_id = $_GET['pet_id'];
$questionQuery = $bd->query("SELECT * FROM Questions WHERE Pet_Type=(SELECT Pet_Type FROM Pets where Pets.ID=$pet_id)");
$questionQueryResult = $questionQuery->fetchAll(PDO::FETCH_ASSOC);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Регистрация </title>
    <link rel="stylesheet" href="src/css/Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@1,400;1,700&display=swap"
          rel="stylesheet">
</head>
<body>
<div class="main">
    <div class="modal">
        <div>
            <form action="questions_pet.php" method="post">
                <input type="hidden" name="pet_id" value="<?=$pet_id?>">
                <?php
                    foreach ($questionQueryResult as $question) {
                        echo "<div class='question' id='".$question['ID']."'>";
                        echo "<h1>";
                        echo $question['Text_Question'];
                        echo "</h1>";
                        echo "<div class='answers'>";
                        echo "<input name='answer_".$question['ID']."' class='text_response' type='text' value=''>";
                        echo "\n\r";
                        echo "</div>";
                        echo "</div>";
                        echo "\n\r";
                    }
                ?>

                <button type="submit" class="btn"> Добавить </button>
            </form>
        </div>

    </div>
</div>
</body>

<script src="src/js/jquery.min.js"></script>
<script>

</script>

</html>
