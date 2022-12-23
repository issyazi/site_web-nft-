<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password_repeat'];

    if ($password === $password_repeat){
        //$_FILES['avatar']['name'];
        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if   (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)){
            $_SESSION['message'] = 'Ошибка при загрузке изображения';
            header('Location: ../register.php');
       }
       $password = md5($password);

       mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$login', '$email', '$password', '$path')");

       $_SESSION['message'] = 'Регистрация прошла успешно';
       header('Location: ../login.php');

    } else{
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }
?>
