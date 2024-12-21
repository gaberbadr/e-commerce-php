
<?php

session_start();
if(isset($_SESSION['id']) && !empty($_SESSION['id'])) { //if there is session 
 $idofuser = $_SESSION['id'];
 $name =$_SESSION['name'];
 $email = $_SESSION['email'];
 $password = $_SESSION['password'];

   include('config.php');
   if (isset($_POST['refresh'])) {
    $ID = $_POST['id'];
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $quantityold= $_POST['quantityold'];
    $quantitynew= $_POST['quantitynew'];

$product=mysqli_query ($con, "SELECT * FROM cart WHERE  id = $ID AND price =$PRICE AND name = '$NAME'  AND quantity = $quantityold");
$data=mysqli_fetch_array($product);
    
 $total=$quantitynew*$data['price'];
    
 $update = "UPDATE cart  SET id=$data[id] ,name='$data[name]' ,img='$data[img]' ,price=$data[price] ,quantity=$quantitynew ,size='$data[size]' ,total=$total  WHERE  id = $ID AND price =$PRICE AND name = '$NAME'  AND quantity = $quantityold";
 mysqli_query ($con, $update);
 header('location: cart.php');

   }
  }else{
    header('location: login.php');
}

   ?> 




