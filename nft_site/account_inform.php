<div> 
    <div class = "container">
        <h1 class = "title"> Account </h1>
        <div class = "information">
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="100" alt="" class = "avatar">
            <div>
                <p class = "username"><?= $_SESSION['user']['login'] ?></p>
                <p class = "email"><?= $_SESSION['user']['email'] ?></p>
                <a href="inc/logout.php" class="logout">Выход</a>
            </div>
        </div>
    </div>
</div>