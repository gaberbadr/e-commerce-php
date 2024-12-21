<?php

session_start();
if(isset($_SESSION['id']) && !empty($_SESSION['id'])) { //if there is session 
 $idofuser = $_SESSION['id'];
 $name =$_SESSION['name'];
 $email = $_SESSION['email'];
 $password = $_SESSION['password'];


include ('config.php');
 $ID = $_GET['id'];
 $price = $_GET['price'];
 $name = $_GET['name'];
mysqli_query ($con, "DELETE FROM cart WHERE id = $idofuser AND price = '$price' AND name = '$name'");//id = $idofuser not $ID becuse the product deleted by user so he delete from prouduct of its id cart
header('location: cart.php');
}else{
    header('location: login.php');
}
?>

