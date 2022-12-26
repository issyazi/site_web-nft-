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
    <title> cart </title>
</head>
<body>
    <div>
        <?php
        include 'header.php';
        ?>
    </div>
    <div class = "container">
        <div class = "cart_inf">
            <p class ="sum_items">Items: 1</p>
            <p class = "cart_bar">Select: 0</p>
            <p class = "cart_bar">Select all</p>
            <p class = "cart_bar">Delete all</p>
        </div>
        <div class = "item">
            <div class ="select">
                <div class = "circle">  </div> 
                <!-- нужно при выборе изменить класс на сircle_on  -->
                <img src="" class = "nft_pic">
                <div class = "cart_nft">
                    <p class = "cart_name">KLEeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeNIN</p>
                    <p class = "cart_price"> 0.0001 рублей </p>
                </div>
            </div>
            <div> <img class = "delete" src="icons/delete.png"> </div>
        </div> 
    </div>
    <div>
        <?php 
        include 'footer.php'
        ?>
    </div>
</body>
</html>