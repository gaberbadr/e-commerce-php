<?php

session_start();
if(isset($_SESSION['id']) && !empty($_SESSION['id'])) { //if there is session 
    $idofuser = $_SESSION['id'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

include('config.php');

if (isset($_POST['add'])) {
    $ID = $_GET['id'];
    $quantity = $_POST['quantity'];
    $selection = $_POST['selection'];
 //get the product from prod to compare Check if the product already exists in the cart
    $productofprod=mysqli_query ($con, "SELECT * FROM prod WHERE id=$ID");
$data=mysqli_fetch_array($productofprod);


    // Check if the product already exists in the cart
    $check_product = mysqli_query($con, "SELECT * FROM cart WHERE id=$idofuser AND  price =$data[price] AND name = '$data[name]' AND img = '$data[img]'");
    $existing_product = mysqli_fetch_array($check_product);

    if ($existing_product) {
     //not add because product of cart is already exist
    header('location: cart.php');
    } else {

        if ($selection === "select size") {
            $selection = "medium"; // Default size if 'select size' is chosen
        }

$total=$quantity*$data['price'];

$insert = "INSERT INTO cart (id,img,name, price,quantity,size,total) VALUES ('$idofuser' ,'$data[img]', '$data[name]','$data[price]', '$quantity','$selection', '$total') ";
mysqli_query ($con, $insert);
header('location: cart.php');
    }
    }

}else{
    header('location: login.php');
}
?>
