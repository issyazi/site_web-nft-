<?php
error_reporting(-1);
session_start();
require_once 'connect.php';
if (isset($_GET['cart'])){
    switch($_GET['cart']){
        case 'add':
            $id = $_GET['id'];
            $product = ;
            echo json_encode(['code' => 'ok', 'answer' => $product]);
            break;
    }
}
