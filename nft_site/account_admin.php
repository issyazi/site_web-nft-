<div> 
    <div class = "container">
        <div class = "purchased">
            <p class = "status"> Statistic </p>
            <?php
                include 'inc/connectproducts.php';
                $all_users = mysqli_num_rows(mysqli_query($connectproducts, "SELECT * FROM `users`"));
                $all_buys = mysqli_num_rows(mysqli_query($connectproducts, "SELECT * FROM `products` where `amount` = 0"));
                echo'            
                <div class = "bought">
                    <p>registered users</p>
                    <p>:</p>
                    <p>'.$all_users.'</p>
                </div>
                <div class = "bought">
                <p>purchased</p>
                    <p>:</p>
                    <p>'.$all_buys.'</p>
                </div>
                ';
            ?>
        </div>
        <hr>
        <div class = "bt_admin">
            <a href="new_nft.php" class = "buttons"> new nft </a>
            <a href="edit_nft.php" class = "buttons"> change nft </a>
            <a href="delete_nft.php" class = "buttons"> delete nft </a>
        </div>
    </div>
</div>
    