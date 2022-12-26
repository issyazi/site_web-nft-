<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

    $error_fields = [];

    if ($login === ''){
        $error_fields[] = 'login';
    }

    if ($password === ''){
        $error_fields[] = 'password';
    }

    if (!empty($error_fields)){
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Проверьте правильность полей",
            "fields" => $error_fields
        ];

        echo json_encode($response);

        die;
    }
    $query = mysqli_query($connect, "SELECT `password` FROM `users` WHERE `login` = '$login' OR `email` = '$login'");
    $hash = mysqli_fetch_assoc($query);
    $hash = $hash['password'];

    if(password_verify($password, $hash)){
        $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' OR `email` = '$login'");
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "email" => $user['email'],
            "avatar" => $user['avatar'],
            "admin" => $user['admin']
        ];

        $response = [
            "status" => true
        ];

        echo json_encode($response);

    }else{

        $response = [
            "status" => false,
            "message" => 'Неверный логин или пароль'
        ];

        echo json_encode($response);
    }
?>