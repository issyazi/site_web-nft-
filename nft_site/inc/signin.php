<?php
    session_start();
    require_once 'connect.php';

    $login_email = $_POST["login_email"];
    $password = md5($_POST["login_email"]);

    $check_user = mysqli_query($connect,"SELECT * FROM 'users' WHERE 
    ('login' = '$login_email' OR 'email' = '$login_email') 
    AND 'password' = '$password' ");