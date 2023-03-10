<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="icons/icon.ico" />
    <link rel="icon" type="image/vnd.microsoft.icon" href="icons/icon.ico">
    <link rel="icon" type="image/x-icon" href="icons/icon.ico">
    <link rel="icon" href="icons/icon.ico" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>catalog</title>
</head>
<body>
    <div>
        <?php
        include 'header.php';
        ?>
        <div> 
            <div class = "container">
                <h1 class = "title"> Catalog </h1>
                <link rel="stylesheet" href="css/style.css">
                <?php
                    include 'inc/connectproducts.php';
                    $all_products = mysqli_query($connectproducts, "SELECT * FROM `products` WHERE `amount` = 1");
                    if ($all_products > 0){
                        while($row = mysqli_fetch_assoc($all_products)){
                            $id = $row['id'];
                            $product_name = $row['name'];
                            $collection = $row['collection'];
                            $picture = $row['picture'];
                            $price = $row['price'];
                            $amount = $row['amount'];
                            echo'
                            <div class = "catalog_item">
                                <div class = "catalog_inform">
                                    <img src='.$picture.' data-enlargeable width="100" alt="" class = "nft_pic">
                                    <div>
                                        <p class = "product_name">'.$product_name.'</p>
                                        <p class = "product_price">'.$price.'$</p>
                                    </div>
                                </div>
                                <button type = "submit" class = "buy-btn" data-id='.$id.'>BUY</button>
                            </div>
                            ';
                        }
                    } else{
                        echo'<h1 class = "title"> Come later! </h1>';
                    }
                ?>
                <script src="js/jquery-3.6.3.min.js"></script>
                <script src="js/image.js"></script>
                <script src="js/main.js"></script>
            </div>
        </div>
    </div>
</body>
</html>           