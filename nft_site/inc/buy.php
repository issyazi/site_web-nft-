<?php
    session_start();
    require_once 'connectproducts.php';

    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $user_id = (int)$_SESSION['user']['id'];
        echo json_encode(['code' => 'ok', 'answer' => $id, 'user' => $user_id]);
        mysqli_query($connectproducts, "UPDATE `products` SET `owner` = '$user_id', `amount` = 0 WHERE id = '$id'");
    };
    
    