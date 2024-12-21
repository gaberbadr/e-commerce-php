<?php

session_start();
if(isset($_SESSION['id']) && !empty($_SESSION['id'])) { //if there is session 
 $idofuser = $_SESSION['id'];
 $name =$_SESSION['name'];
 $email = $_SESSION['email'];
 $password = $_SESSION['password'];

include('config.php');

if (isset($_POST['add'])) {
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];


    $addresofuser=mysqli_query ($con, "SELECT * FROM address WHERE id=$idofuser");
$data=mysqli_fetch_array($addresofuser);
   
if ($data) {
    $update = "UPDATE address  SET name='$fullname' ,address='$address' ,city='$city', country='$country' WHERE id=$idofuser ";
    mysqli_query ($con, $update);
    header('location: cart.php');
    } else {

$insert = "INSERT INTO address (id,name,address,city,country) VALUES ('$idofuser' ,'$fullname','$address', '$city','$country')";
mysqli_query ($con, $insert);
header('location: cart.php');
   }
    }

}else{
    header('location: login.php');

}
?>
