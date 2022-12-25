<?php
    session_start();
    require_once 'connectproducts.php';

    $nft_name = $_POST['nft_name'];
    $collection = $_POST['collection'];
    $price = $_POST['price'];

    $check_name = mysqli_query($connectproducts, "SELECT * FROM `products` WHERE `name` = '$nft_name'");
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

    if ($nft_name === ''){
        $error_fields[] = 'nft_name';
    }
    if ($collection === ''){
        $error_fields[] = 'collection';
    }
    if ($price === ''){
        $error_fields[] = 'price';
    }
    if(!$_FILES['picture']){
        $error_fields[] = 'picture';
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


    
    $pathpicture = 'productpictures/' . time() . $_FILES['picture']['name'];
    if   (!move_uploaded_file($_FILES['picture']['tmp_name'], '../' . $pathpicture)){
        $response = [
            "status" => false,
            "type" => 2,
            "message" => "Ошибка при загрузке изображения"

        ];
        echo json_encode($response);

        die;

    }

    mysqli_query($connectproducts, "INSERT INTO `products` (`id`, `name`, `collection`, `price`, `picture`, `amount`) VALUES (NULL, '$nft_name', '$collection', '$price', '$pathpicture', '1')");

    $response = [
        "status" => true,
        "message" => "NFT added"

    ];
    echo json_encode($response);

?>
