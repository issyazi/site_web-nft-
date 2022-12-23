<?php
    session_start();

    if ($_SESSION['user']){
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
    <title> login </title>
</head>
<body>
    <div>
        <?php
        include 'header.php'
        ?>
    </div>
    <form action="inc/signin.php" method="post">
        <label>Логин или электронная почта</label>
        <input type="text" class = "enter" name="login" placeholder="Введите логин">
        <label>Пароль</label>
        <input type="password" class = "enter" name="password" placeholder="Введите пароль">
        <button type="submit" class = "buttons">Enter</button>
        <p>
           Don't have an account? <a href="/register.php" class = "buttons"> Login</a>
        </p>
        <?php
            if ($_SESSION['message']){
                echo '<p class="message">' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
    <div>
        <?php
        include 'footer.php'
        ?>
    </div>
</body>
</html>