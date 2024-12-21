
   <?php
//get data from form in index.php by post methode 



   include('config.php');
   
   if (isset ($_POST ['upload'])){
    $prand = $_POST ['prand'];
    $NAME = $_POST ['name'];
    $PRICE = $_POST ['price'];
    $IMAGE = $_FILES['image'];//get the image
    $image_location = $_FILES['image'] ['tmp_name'];//location of image
    $image_name=$_FILES['image']['name'];//name of image
    $image_up= "img/".$image_name;//name of image inside its folder in the file of project
    $insert = "INSERT INTO prod ( prand, name, price, img) VALUES ('$prand','$NAME', '$PRICE','$image_up')";
    mysqli_query ($con, $insert);
    move_uploaded_file($image_location,"img/".$image_name);//save the uploaded location file to the folder that named images and make its new name $image_name(move_uploaded_file($image_location,"images/"."gaber.jpg")ممكن اغير امتددها و اسمها زي )
    header('location: admin.php');


    /*
if(move_uploaded_file($image_location,"images/".$image_name)){
    echo "<script>alert('uploaded done');</script>";
}else{
    echo "<script>alert('uploaded failed');</script>";
}
    */

   }

   ?> 