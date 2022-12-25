<?php
    $connectproducts = mysqli_connect('localhost', 'root', '', 'users');
    if (!$connectproducts){
        die('Ошибка подключения к базе данных');
    }