<?php
session_start();
$bdName = 'pets_base';
$bdUser = 'dana';
$bdPass = 'oA7hX0yX7g';
$bdHost = '185.9.147.1';
$bd = null;
try {
    //подключаемся к базе
    $bd = new PDO('mysql:host=' . $bdHost . ';dbname=' . $bdName, $bdUser, $bdPass);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bd->exec('SET CHARACTER SET utf8');
    $bd->exec('SET lc_time_names="ru_RU"');
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}

