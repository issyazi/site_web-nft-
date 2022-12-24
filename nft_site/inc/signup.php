<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password_repeat'];

    $check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
    if (mysqli_num_rows($check_login) > 0){
        $response = [
            "type" => 1,
            "status" => false,
            "fields" => ['login'],
            "message" => "Такой логин уже существует"
        ];

        echo json_encode($response);
        die();
    }

    $check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
    if (mysqli_num_rows($check_email) > 0){
        $response = [
            "type" => 1,
            "status" => false,
            "fields" => ['email'],
            "message" => "Такая почта уже используется"
        ];

        echo json_encode($response);
        die();
    }

    $error_fields = [];

    if ($login === ''){
        $error_fields[] = 'login';
    }
    if ($password === ''){
        $error_fields[] = 'password';
    }
    if ($password_repeat === ''){
        $error_fields[] = 'password_repeat';
    }
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error_fields[] = 'email';
    }
    if(!$_FILES['avatar']){
        $error_fields[] = 'avatar';
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


    if ($password === $password_repeat){
        //$_FILES['avatar']['name'];
        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if   (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)){
            $response = [
                "status" => false,
                "type" => 2,
                "message" => "Ошибка при загрузке изображения"

            ];
            echo json_encode($response);

        }
        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$login', '$email', '$password', '$path')");

        $response = [
            "status" => true,
            "message" => "Регистрация прошла успешно"

        ];
        echo json_encode($response);

    } else{
        $response = [
            "status" => false,
            "type" => 1,
            "fields" => ['password', 'password_repeat'],
            "message" => "Пароли не совпадают"

        ];
        echo json_encode($response);
    }
?>
