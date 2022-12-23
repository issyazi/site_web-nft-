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
    <div class = "container">
        <h1 class = "title"> Create new account </h1>
        <form action="/inc/signup.php" method="post" enctype="multipart/form-data">
            <label style="margin-top: 30px;">Login*</label>
            <input type="text" class = "enter" name="login" placeholder="Введите логин">
            <label>E-mail*</label>
            <input type="email" class = "enter" name="email" placeholder="Введите электронную почту">
            <label>Avatar</label>
            <input type="file" class = "enter" name="avatar">
            <label>Password*</label>
            <input type="password" class = "enter" name="password" placeholder="Введите пароль">
            <label>Repeat password*</label>
            <input type="password" class = "enter" name="password_repeat" placeholder="Введите пароль еще раз">
            <button type="submit" class = "buttons">Ready</button>
            <p>
            Have account yet? - <a href="login.php">Enter</a>
            </p>
            <?php
                if ($_SESSION['message']){
                    echo '<p class="message">' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>
    </div>
    <div>
        <?php
        include 'footer.php'
        ?>
    </div>
</body>
</html>