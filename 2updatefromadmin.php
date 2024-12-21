

<?php
   include('config.php');

   
   if (isset ($_POST ['update'])){
      $ID = $_POST['id'];
      $prand = $_POST ['prand'];
      $NAME = $_POST ['name'];
      $PRICE = $_POST ['price'];
      $IMAGE = $_FILES['image'];//get the image
      $image_location = $_FILES['image'] ['tmp_name'];//location of image
      $image_name=$_FILES['image']['name'];//name of image
      $image_up= "img/".$image_name;//name of image inside its folder in the file of project




//get the old value of prod befor i update to use in where in sql to update cart
$products=mysqli_query ($con, "SELECT * FROM prod WHERE id=$ID");
$data=mysqli_fetch_array($products);


//update prod
      $update = "UPDATE prod  SET prand='$prand' ,name='$NAME' ,price='$PRICE', img='$image_up' WHERE id=$ID ";
      mysqli_query ($con, $update);
      move_uploaded_file($image_location,"img/".$image_name);//save the uploaded location file to the folder that named images and make its new name $image_name(move_uploaded_file($image_location,"images/"."gaber.jpg")ممكن اغير امتددها و اسمها زي )
      
//upate in cart of all users
   $oldcart =mysqli_query ($con,"SELECT * FROM cart WHERE  price =$data[price] AND name = '$data[name]' AND img = '$data[img]'" );
   $datacart=mysqli_fetch_array($oldcart);

   $updatecart = "UPDATE cart  SET name='$NAME' ,price='$PRICE', img='$image_up' WHERE  price =$data[price] AND name = '$data[name]' AND img = '$data[img]'";
   mysqli_query ($con, $updatecart);
   header('location: showstore.php');
   }
   ?> 