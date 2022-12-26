<div>
    <header class = "header">
        <div class = "container">
            <div class="header_inner">
                <div class = "icon"> IDK </div>
                <nav class = "navi">
                    <a href = "index.php" class = "nav_link"> main </a>
                    <a href = "catalog.php" class = "nav_link"> catalog </a>
                    <a href = "login.php" class = "nav_link"> account </a>
                    <?php
                    session_start();
                    if ($_SESSION['user']){
                        $ava = $_SESSION['user']['avatar'];
                        echo '<a href = "login.php" class = "nav_link1"> <img type= "image" class ="button3" src="'.$ava.'"> </a>';
                    } else {
                        echo '<a href = "login.php" class = "nav_link1"> <img type= "image" class ="button3" src="icons/icon.ico"> </a>';
                    }

                    ?>
                </nav>
            </div>
        </div>
    </header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/header.js"></script>
</div>