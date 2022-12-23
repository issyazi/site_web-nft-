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
    <title>IDK</title>
</head>
<body>
    <header class = "header">
        <div class = "container">
            <div class="header_inner">
                <div class = "icon"> IDK </div>
                <nav class = "navi">
                    <a href = "index.html" class = "nav_link"> main </a>
                    <a href = "#" class = "nav_link"> explore </a>
                    <a href = "login.html" class = "nav_link"> account </a>
                    <img href = "#" class ="button3" src="icons/face.png" >
                    <img href = "#" class ="button4" src="icons/cart.png" >
                    </form>
                </nav>
            </div>
        </div>
    </header>
    <form action="inc/signin.php" method="post">
        <label>Логин или электронная почта</label>
        <input type="text" name="login_email" placeholder="Введите логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
           У вас нет аккаунта? - <a href="/register.php">Зарегистрируйтесь</a>
        </p>
        <?php
            if ($_SESSION['message']){
                echo '<p class="message">' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>