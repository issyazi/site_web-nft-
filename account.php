<?php
    session_start();
    if (!$_SESSION['user']){
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
    <title>account</title>
</head>
<body>
    <div>
        <?php
        include 'header.php';
        include 'account_inform.php';

        //$login_ck = $_SESSION['user']['login'];
        //$check_admin = mysqli_query($connect, "SELECT * FROM `users` WHERE `name` = '$login_ck' AND `admin` = ");
        if ($_SESSION['user']['admin'] === 'admin'){
            include 'account_admin.php'; 
        } else{
            include 'account_user.php';
        }
        include 'footer.php';
        ?>
    </div>
</body>
</html>