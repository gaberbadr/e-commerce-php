
<?php

   include('config.php');
   
   if (isset ($_POST ['newuser'])){
    $NAME = $_POST ['name'];
    $email = $_POST ['email'];
    $Password = $_POST['Password'];
   }

   $admin=mysqli_query ($con, "SELECT * FROM admin WHERE email='$email'");
   $dataadmin=mysqli_fetch_array($admin);

if($dataadmin){
echo "<h1>this email is already taken by admin</h1>";
}else{
      $users=mysqli_query ($con, "SELECT * FROM users WHERE email='$email' ");
   $datauser=mysqli_fetch_array($users);
      if($datauser){
      echo "<h1>this email is already taken</h1>";
      }else{
    $insert = "INSERT INTO users (name, email, password) VALUES ('$NAME', '$email','$Password')";
    mysqli_query ($con, $insert);

    $usersaftercheck=mysqli_query ($con, "SELECT * FROM users WHERE email='$email' ");
   $datauseraftercheck=mysqli_fetch_array($usersaftercheck);

         session_start();
         $_SESSION['id']=$datauseraftercheck['id'];
         $_SESSION['name']=$datauseraftercheck['name'];
         $_SESSION['email']=$datauseraftercheck['email'];
         $_SESSION['password']=$datauseraftercheck['password'];
    header('location: index.php');
      }
   }

   ?> 


