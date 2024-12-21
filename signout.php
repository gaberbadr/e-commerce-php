
<?php

session_start();
if(isset($_SESSION['id']) && !empty($_SESSION['id'])) { //if there is session 
 $idofuser = $_SESSION['id'];
 $name =$_SESSION['name'];
 $email = $_SESSION['email'];
 $password = $_SESSION['password'];


 // Unset all session variables
 session_unset();
 
 // Destroy the session
 session_destroy();
 
 header('Location: login.php');

}else{
    header('Location: login.php');  
}
 ?>