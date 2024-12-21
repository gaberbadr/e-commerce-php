

<?php
include('config.php');
if (isset($_POST['login'])) {
    $email =  $_POST['email'];
    $password = $_POST['Password'];

    $admin = mysqli_query($con, "SELECT * FROM admin WHERE email='$email'");
    $dataadmin = mysqli_fetch_array($admin);

    if ($dataadmin) {
        // Check password for admin here (compare hashed passwords)
         if ($dataadmin['password'] == $password) {
        header('location: admin.php');
         } else {
             echo "<h1>Incorrect password for admin</h1>";
         }
    } else {
        $user = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
        $datauser = mysqli_fetch_array($user);

        if ($datauser) {
            // Check password for user here (compare hashed passwords)
             if ($datauser['password'] == $password) {
                session_start();
                $_SESSION['id']=$datauser['id'];
                $_SESSION['name']=$datauser['name'];
                $_SESSION['email']=$datauser['email'];
                $_SESSION['password']=$datauser['password'];

            header('location: index.php');
             } else {
                 echo "<h1>Incorrect password for user</h1>";
             }
        } else {
            echo "<h1>Your email doesn't exist. Please register on our website.</h1>";
        }
    }
}
?>


