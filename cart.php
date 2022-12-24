<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="icons/icon.ico" />
    <link rel="icon" type="image/vnd.microsoft.icon" href="icons/icon.ico">
    <link rel="icon" type="image/x-icon" href="icons/icon.ico">
    <link rel="icon" href="icons/icon.ico" /> 
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
            <p>Select: 0</p>
            <p>Select all</p>
            <p>Delete all</p>
        </div>
        <div class = "item">
            <div class ="select">
                <div class = "circle">  </div>
                <img src="" class = "nft_pic">
            </div>
            <div class = "delete"> <p>delete</p></div>
        </div> 
    </div>
    <div>
        <?php 
        include 'footer.php'
        ?>
    </div>
</body>
</html>