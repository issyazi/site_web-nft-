<?php
    session_start();
    require_once 'connectproducts.php';

    $edit_name = $_POST['edit_name'];
    $edit_price = $_POST['edit_price'];
    $nft_id = (int)$_POST['nft_id'];

    $check_id = mysqli_query($connectproducts, "SELECT * FROM `products` WHERE `id` = '$nft_id' AND `amount` = 1");
    if (mysqli_num_rows($check_name) === 0){
        $response = [
            "type" => 1,
            "status" => false,
            "fields" => ['nft_id'],
            "message" => "Проверьте id"
        ];

        echo json_encode($response);
        die();
    }

    $check_id = mysqli_query($connectproducts, "SELECT * FROM `products` WHERE `name` = '$nft_name'");
    if (mysqli_num_rows($check_name) > 0){
        $response = [
            "type" => 1,
            "status" => false,
            "fields" => ['nft_name'],
            "message" => "Такое название уже существует"
        ];

        echo json_encode($response);
        die();
    }

    $error_fields = [];

    if ($nft_id === ''){
        $error_fields[] = 'nft_id';
    }


    if (!empty($error_fields)){
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Введите id",
            "fields" => $error_fields
        ];

        echo json_encode($response);

        die;
    }
    if ($edit_name !== '' && $edit_price !== ''){
        die;
    }
    if ($edit_name === '' && $edit_price !== ''){
        mysqli_query($connectproducts, "UPDATE `products` SET `price` = '$edit_price' WHERE `id` = '$nft_id'");

    }
    if ($edit_name !== '' && $edit_price === ''){
        mysqli_query($connectproducts, "UPDATE `products` SET `name` = '$edit_name' WHERE `id` = '$nft_id'");
    }
    if ($edit_name !== '' && $edit_price !== ''){
        mysqli_query($connectproducts, "UPDATE `products` SET `name` = '$edit_name', `price` = '$edit_price' WHERE `id` = '$nft_id'");
    }

    $response = [
        "status" => true,
        "message" => "NFT added"

    ];
    echo json_encode($response);

?>