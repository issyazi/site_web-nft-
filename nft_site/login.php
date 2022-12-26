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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> login </title>
</head>
<body>
    <div>
        <?php
        include 'header.php'
        ?>
    </div>
    <div class = "container">
        <h1 class = "title"> Log in </h1>
        <div class ="two_column">
            <div class = "login_box">
                <form>
                    <label>login/e-mail</label>
                    <input type="text" class = "enter" name="login" placeholder="enter login">
                    <label>password</label>
                    <input type="password" class = "enter" name="password" placeholder="enter password">
                    <div>
                        <button type="submit" class = "login-btn">Enter</button>
                    </div>
                    <p class="message none"> test</p>
                </form>
                
                <script src="js/jquery-3.6.3.min.js"></script>
                <script src="js/main.js"></script>
            </div>
            <div class = "rg_box">
                <p class = "p">Don't have an account?</p>
                <a href="/register.php" class = "buttons"> Create</a>
            </div>
        </div>
    </div>
    
    <div>
        <?php
        include 'footer.php'
        ?>
    </div>
</body>
</html>