
<?php
include ('config.php');
 $ID = $_GET['id'];
mysqli_query ($con, "DELETE FROM users WHERE id = $ID ");
mysqli_query ($con, "DELETE FROM cart WHERE id = $ID ");
mysqli_query ($con, "DELETE FROM address WHERE id = $ID ");
header('location: showstore.php');

?>