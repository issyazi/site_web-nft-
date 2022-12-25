<?php
    session_start();
    if (!$_SESSION['user']){
        header('Location: ../login.php');
    }

    $action = $_POST["action"];
    if ($action == 'add'){
        $id = $_POST['id'];
        $user_id = $_SESSION['user']['id'];
        mysqli_query($connect, "UPDATE `products` SET `owner` = '$user_id' WHERE `id` = '$id'");
        mysqli_query($connect, "UPDATE `products` SET `owner` = 0 WHERE `id` = '$id'");
    }

    