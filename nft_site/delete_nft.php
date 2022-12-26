<?php
    session_start();
    if (!$_SESSION['user'] && !($_SESSION['user']['admin'] = 'admin')){
        header('Location: login.php');
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
    <title>account</title>
</head>
<body>
    <div>
        <?php
        include 'header.php';
        include 'product_inform.php';
        include 'delete_nft_form.php';
        include 'footer.php';
        ?>
    </div>
</body>
</html>