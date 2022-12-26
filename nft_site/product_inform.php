<div> 
    <div class = "container">
        <div class = "purchased">
            <p class = "status"> Products in catalog </p>
            <?php
            include 'inc/connectproducts.php';
            $user_id = $_SESSION['user']['id'];
            $all_products = mysqli_query($connectproducts, "SELECT * FROM `products` WHERE `amount` = 1");
            while($row = mysqli_fetch_assoc($all_products)){
                $id = $row['id'];
                $product_name = $row['name'];
                $collection = $row['collection'];
                $picture = $row['picture'];
                $price = $row['price'];
                $amount = $row['amount'];
                echo'
                <div class = "bought">
                    <p>id:'.$id.', </p>
                    <p>name: '.$product_name.', </p>
                    <p>price: '.$price.'</p>
                </div>
                ';
            }
            ?>
        </div>
        <hr>
    </div>
</div>