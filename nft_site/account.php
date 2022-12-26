<?php
    session_start();
    if (!$_SESSION['user']){
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
        include 'account_inform.php';
        include 'account_user.php';

        if ($_SESSION['user']['admin'] === 'admin'){
            include 'account_admin.php';
        }
        include 'footer.php';
        ?>
    </div>
</body>
</html>