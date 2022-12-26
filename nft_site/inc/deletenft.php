<?php
    session_start();
    require_once 'connectproducts.php';

    $delete_id = (int)$_POST['delete_id'];

    $check_id = mysqli_query($connectproducts, "SELECT * FROM `products` WHERE `id` = '$delete_id' AND `amount` = 1");
    if (mysqli_num_rows($check_name) === 0){
        $response = [
            "type" => 1,
            "status" => false,
            "fields" => ['delete_id'],
            "message" => "Проверьте id"
        ];

        echo json_encode($response);
        die();
    }

    $error_fields = [];

    if ($nft_id === ''){
        $error_fields[] = 'delete_id';
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

    mysqli_query($connectproducts, "DELETE FROM `products` WHERE `id` = '$delete_id'");

    $response = [
        "status" => true,
        "message" => "NFT added"

    ];
    echo json_encode($response);

?>