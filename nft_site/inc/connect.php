<?php
    $connect = mysqli_connect('localhost', 'root', '', 'users');
    if (!$connect){
        die('Ошибка подключения к базе данных');
    }