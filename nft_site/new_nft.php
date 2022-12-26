<?php
    session_start();

    if (!$_SESSION['user'] || $_SESSION['user']['admin'] !== 'admin'){
        header('Location: account.php');
    }
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
    <title> new nft</title>
</head>
<body>
    <div>
        <?php
        include 'header.php'
        ?>
    </div>
    <div class = "container">
        <h1 class = "title"> Add a new token </h1>
        <form>
            <label style="margin-top: 30px;">Name</label>
            <input type="text" class = "enter" name="nft_name" placeholder="enter name">
            <label>Picture</label>
            <input type="file" class = "enter" name="picture">
            <label>Price</label>
            <input type="text" class = "enter" name="price" placeholder="enter price">
            <button type="submit" class = "add-btn">Add</button>
            <p>
            <a href="account.php">Back</a>
            </p>
            <p class="message none"> test</p>
        </form>
        <script src="js/jquery-3.6.3.min.js"></script>
        <script src="js/main.js"></script>
    </div>
    <div>
        <?php
        include 'footer.php'
        ?>
    </div>
</body>
</html>