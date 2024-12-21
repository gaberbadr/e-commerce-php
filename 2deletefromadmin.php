<?php
include ('config.php');
$ID = $_GET['id'];

//get the old value of prod befor i update to use in where in sql to delete cart
$products=mysqli_query ($con, "SELECT * FROM prod WHERE id=$ID");
$data=mysqli_fetch_array($products);

//delete item from prod
mysqli_query ($con, "DELETE FROM prod WHERE id=$ID ");


//delete in cart of all users
mysqli_query ($con, "DELETE FROM cart  WHERE  price =$data[price] AND name = '$data[name]' AND img = '$data[img]'");

header('location: showstore.php');
?>