<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="icons/icon.ico" />
    <link rel="icon" type="image/vnd.microsoft.icon" href="icons/icon.ico">
    <link rel="icon" type="image/x-icon" href="icons/icon.ico">
    <link rel="icon" href="icons/icon.ico" /> 
    <title>account</title>
</head>
<body>
    <div>
        <?php
        include 'header.php';
        ?>
        <div> 
            <div class = "container">
                <h1 class = "title" > Catalog </h1>
                <link rel="stylesheet" href="css/style.css">
                <?php
                    include 'inc/connectproducts.php';
                    $all_products = mysqli_query($connectproducts, "SELECT * FROM `products`");
                    while($row = mysqli_fetch_assoc($all_products)){
                        $id = $row['id'];
                        $product_name = $row['name'];
                        $collection = $row['collection'];
                        $picture = $row['picture'];
                        $price = $row['price'];
                        $amount = $row['amount'];
                        echo'
                        <div class = "catalog_item">
                            <img src='.$picture.' width="100" alt="" class = "nft_pic">
                            <div>
                                <p class = "product_name">'.$product_name.'</p>
                                <p class = "product_price">'.$price.'$</p>
                                <button type = "submit" class = "buy-btn" data-id='.$id.'>BUY</button>
                            </div>
                        </div>
                        ';
                    }
                ?>
                <script src="js/jquery-3.6.3.min.js"></script>
                <script src="js/main.js"></script>
            </div>
        </div>
    </div>
</body>
</html>