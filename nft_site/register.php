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
    <title> registration</title>
</head>
<body>
    <div>
        <?php
        include 'header.php'
        ?>
    </div>
    <form action="/inc/signup.php" method="post" enctype="multipart/form-data">
        <label>Логин*</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>Электронная почта*</label>
        <input type="email" name="email" placeholder="Введите электронную почту">
        <label>Аватар профиля</label>
        <input type="file" name="avatar">
        <label>Пароль*</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Повторите пароль*</label>
        <input type="password" name="password_repeat" placeholder="Введите пароль еще раз">
        <button type="submit">Зарегистрировать</button>
        <p>
           У вас уже есть аккаунт? - <a href="login.php">Войти</a>
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